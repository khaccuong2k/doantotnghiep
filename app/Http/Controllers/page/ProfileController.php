<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    protected function view() {
        return view('page.profile');
    }

    protected function postEdit(Request $req,Users $users) {
        $fileName = 'noimg.jpg';
        if($req->hasFile('img'))
        {
            $file = $req->file('img');
            $detinationPath = public_path('upload/img/img_user');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move($detinationPath,$fileName);
        }
        else
        {
            $fileName = 'noimg.jpg';
        }
        $data = [
            'email' => $req->email,
            'username' => $req->username,
            'img' => $fileName
        ];
        if($req->pass) {
            $data['password'] = Hash::make($req->pass);
        }
        $users->update($data);
        return redirect()->back()->with('messageEdit','Chỉnh sửa thành công');
    }
}
