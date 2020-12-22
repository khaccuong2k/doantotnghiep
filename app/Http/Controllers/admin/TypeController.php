<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Types;

class TypeController extends Controller
{
    
    public function view(Types $types)
    {
        $type = $types->get();
        // dd($type);
        return view('admin.type.view',compact('type'));
    }

    public function create(Request $req, Types $types)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_type'); // Thư mục upload
			
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
            'des' => $req->des,
            'img' => $fileExtension,
        ];

        // dd($data);
        $types->create($data);
        return redirect()->route('view-type');
    }

    public function delete(Request $req,Types $types)
    {
        if($req->ajax())
        {
            $type = $types->where('id', $req->id)->first();
            
            $type->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Types $types)
    {
        $getId = $types->where('id',$id)->get();
        $idd = $types->find($id);
        return view('admin.type.edit',compact('getId','idd'));
    }

    public function update($id,Request $req)
    {
        $type = Types::where('id',$id)->first();
        if ($req->has('img_edit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img_edit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_type'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img_edit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $type->img;
        }

       
        $data = [
            'name' => $req->name_edit,
            'des' => $req->des_edit,
            'img' => $fileExtension,
        ];

        // dd($data);
  
        $type->update($data);
  
        return redirect()->route('view-type');
    }
}
