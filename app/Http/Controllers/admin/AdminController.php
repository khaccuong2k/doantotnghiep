<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    public function create(Request $req, Admin $admin)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_admin'); // Thư mục upload
			
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
            'password' => md5($req->password),
            'name' => $req->name,
            'username' => $req->username,
            'email' => $req->email,
            'img' => $fileExtension,
        ];
        $admin->create($data);
        return redirect()->route('view-admin');
    }
    public function view(Admin $admin)
    {
        $admins = $admin->orderBy('id','desc')->get();
        // dd($admins);
        return view('admin.admin.view',compact('admins'));
    }

    public function delete(Request $req,Admin $admin)
    {
        if($req->ajax())
        {
            $admin = $admin->where('id', $req->id)->first();
            
            $admin->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Admin $admin)
    {
        $getId = $admin->where('id',$id)->get();
        $idd = $admin->find($id);
        return view('admin.admin.edit',compact('getId','idd'));
    }

    public function update($id,Request $req)
    {
        $admins = Admin::where('id',$id)->first();
        if ($req->has('img_edit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img_edit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_admin'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img_edit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $admins->img;
        }

       
        $data = [
            'name' => $req->name_edit,
            'username' => $req->user_edit,
            'email' => $req->email_edit,
            'img' => $fileExtension,
        ];
        if($req->pass_edit != '')
        {
            $data['password'] = md5($req->pass_edit);
        }
  
        $admins->update($data);
  
        return redirect()->route('view-admin');
    }
}
