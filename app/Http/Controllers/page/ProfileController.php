<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\models\BookEventModel;
use App\Models\Events;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    protected function view(Events $events,BookEventModel $bookEventModels) {
        // dd(Auth::check());
        $event = $events->all();
        $bookEventModel = $bookEventModels->all();
        return view('page.profile',compact('event','bookEventModel'));
    }

    protected function postEdit(Request $req) {
        if($req->isMethod('POST'))
        {
            $validate = Validator::make($req->all(),[
                'username' => 'required|min:5|max:30|alpha',
                'email' => 'required|email|unique:users,email',
                'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:500000',
                'pass' => 'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'email.unique'=>'Email đã được sử dụng',
                'username.required'=>'Vui lòng nhập tài khoản',
                'username.alpha'=>'Chỉ được sử dụng kí tự chữ',
                'username.min'=>'Mật khẩu ít nhất 5 ký tự',
                'username.max'=>'Mật khẩu không quá 30 ký tự',
                'img.required'=>'Vui lòng nhập hình ảnh',
                'img.image'=>'Phải chọn ảnh cho bước này',
                'img.mimes'=>'Ảnh phải thuộc các loại: jpg,jpeg,png,gif',
                'img.max'=>'Hình ảnh không được quá 500000 byte',
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
            $users = Users::where('id',Auth::user()->id)->first();
            if ($req->has('img')) {
                $fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
                $uploadPath = public_path('/upload/img/img_user'); // Thư mục upload
                $req->file('img')->move($uploadPath, $fileExtension);
            }
            else {
                // Lỗi file
                $fileExtension = 'noimg.jpg';
            }

            $data = [
                'email' => $req->email,
                'username' => $req->username,
                'img' => $fileExtension
            ];
            if($req->password) {
                $data['password'] = Hash::make($req->password);
            }
            // dd($data);
            $users->update($data);
            
            return redirect()->back()->with('messageEdit','Chỉnh sửa thành công');
        }
    }
}
