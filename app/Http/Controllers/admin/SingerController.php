<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Singers;
use App\Models\Countrys;

class SingerController extends Controller
{
    public function add(Countrys $country)
    {
        $countrys = $country->orderBy('id','desc')->get();
        // dd($singers);
        return view('admin.singer.add',compact('countrys'));
    }
    
    public function view(Singers $singer,Countrys $country)
    {
        $singers = $singer->orderBy('id','desc')->get();
        $countrys = $country->get();
        // dd($countrys);
        return view('admin.singer.view',compact('singers','countrys'));
    }

    public function create(Request $req, Singers $singer)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_singer'); // Thư mục upload
			
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
            'id_country' => $req->id_country,
            'name' => $req->name,
            'des' => $req->des,
            'img' => $fileExtension,
        ];

        // dd($data);
        $singer->create($data);
        return redirect()->route('view-singer');
    }

    public function delete(Request $req,Singers $singer)
    {
        if($req->ajax())
        {
            $singers = $singer->where('id', $req->id)->first();
            
            $singers->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Singers $singer,Countrys $country)
    {
        $getId = $singer->where('id',$id)->get();
        $idd = $singer->find($id);
        $countrys = $country->get();
        return view('admin.singer.edit',compact('getId','idd','countrys'));
    }

    public function update($id,Request $req)
    {
        $singer = Singers::where('id',$id)->first();
        if ($req->has('img_edit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img_edit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_singer'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img_edit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $singer->img;
        }

       
        $data = [
            'id_country' => $req->id_singeredit,
            'name' => $req->name_edit,
            'des' => $req->des_edit,
            'img' => $fileExtension,
        ];

        // dd($data);
  
        $singer->update($data);
  
        return redirect()->route('view-singer');
    }
}
