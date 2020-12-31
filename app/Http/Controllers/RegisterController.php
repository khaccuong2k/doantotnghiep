<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register()
    {
        return view('admin.check.register');
    }
    
    public function postRegister(Request $req,Users $admins)
    {
        if($req->isMethod('POST'))
        {
            $validate = Validator::make($req->all(),[
                'username' => 'required|min:5|max:30|alpha',
                'email' => 'required|email|unique:users,email',
                // 'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:10000',
                'password' => 'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email đã được sử dụng',
                'username.required'=>'Vui lòng nhập tài khoản',
                'username.alpha'=>'Chỉ được sử dụng kí tự chữ',
                'username.min'=>'Mật khẩu ít nhất 5 ký tự',
                'username.max'=>'Mật khẩu không quá 30 ký tự',
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
            $data = [
                'username' => $req->username,
                'email' => $req->email
            ];
            if($req->password) {
                $data['password'] = Hash::make($req->password);
            }
            $admins->create($data);
            return redirect()->back()->with('message','Tạo tài khoản thành công, mời đăng nhập');
        }
    }
}
