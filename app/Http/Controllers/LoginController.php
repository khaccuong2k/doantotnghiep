<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
}
