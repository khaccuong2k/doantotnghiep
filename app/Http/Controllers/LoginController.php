<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    use Authenticatable;
    public function login()
    {
        // dd(Auth::user());
        return view('admin.check.login');
    }

    public function postLogin(Request $req)
    {
        if($req->isMethod('POST'))
        {
            $validate = Validator::make($req->all(),[
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                'password.max'=>'Mật khẩu không quá 20 ký tự'
            ]
            );
            if($validate->fails())
            {
                return redirect()->back()
                                ->withErrors($validate)
                                ->withInput();
            }
            
            $credentials =  array('email'=>$req->email,'password'=>$req->password);
            if (Auth::attempt($credentials)) {
                return redirect()->route('backend');
            }else{
                return redirect()->back()->with('messagee','Đăng nhập thất bại');
            }
        }
    }

    protected function redirectToProvider() {
        return Socialite::driver('google')->redirect();
    }

    protected function handlerProviderCallback() {
        try {
            $user = Socialite::driver('google')->user();
        } catch(\Exception $e) {
            return redirect()->route('index');
        }

        if(explode("@",$user->email)[1] !== "gmail.com") {
            return redirect()->route('index');
        }

        $existingUser = Users::where('email',$user->mail)->first();

        if($existingUser) {
            auth()->login($existingUser,true);
        } else {
            $newUser = new Users();
            // $newUser->username = $user->name;
            $newUser->email = $user->email;
            $newUser->password = bcrypt($user->password);
            $newUser->google_id = $user->id;
            $newUser->save();
            auth()->login($newUser,true);
        }
        return redirect()->route('dashboard');
    }
}
