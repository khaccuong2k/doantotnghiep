<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function view(Users $users)
    {
        $user = $users->orderBy('id','desc')->get();
        // dd($type);
        return view('admin.user.view',compact('user'));
    }

    public function create(Request $req, Users $user)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_user'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
			// return redirect()->back()->with('error', 'Upload files thất bại!');
        }
        $data = [
            'name' => $req->name,
            'img' => $fileExtension,
            'username' => $req->username,
            'password' => $req->password,
            'email' => $req->email,
            'qty_buy' => $req->qty_buy,
            'total_money' => $req->total_money,
            'type_customer' => $req->type_customer,
            'phone' => $req->phone
        ];

        // dd($data);
        $user->create($data);
        return redirect()->route('view-user');
    }

    public function delete(Request $req,Users $users)
    {
        if($req->ajax())
        {
            $user = $users->where('id', $req->id)->first();
            
            $user->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Users $user)
    {
        $getId = $user->where('id',$id)->get();
        $idd = $user->find($id);
        return view('admin.user.edit',compact('getId','idd'));
    }

    public function update($id,Request $req)
    {
        $user = Users::where('id',$id)->first();
        if ($req->has('img_edit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img_edit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_user'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img_edit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $user->img;
        }

       
        $data = [
            'name' => $req->name_edit,
            'des' => $req->des_edit,
            'img' => $fileExtension,
            'address' => $req->address_edit
        ];

        // dd($data);
  
        $user->update($data);
  
        return redirect()->route('view-user');
    }
}
