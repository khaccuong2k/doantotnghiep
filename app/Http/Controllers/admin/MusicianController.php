<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Musician;
use App\Models\Countrys;

class MusicianController extends Controller
{
    
    public function add(Countrys $country)
    {
        $countrys = $country->orderBy('id','desc')->get();
        // dd($countrys);
        return view('admin.musician.add',compact('countrys'));
    }
    
    public function view(Musician $musician,Countrys $country)
    {
        $musicians = $musician->orderBy('id','desc')->get();
        $countrys = $country->get();
        // dd($countrys);
        return view('admin.musician.view',compact('musicians','countrys'));
    }

    public function create(Request $req, Musician $musician)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_musician'); // Thư mục upload
			
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
        $musician->create($data);
        return redirect()->route('view-musician');
    }

    public function delete(Request $req,Musician $musician)
    {
        if($req->ajax())
        {
            $admin = $musician->where('id', $req->id)->first();
            
            $admin->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Musician $musician,Countrys $country)
    {
        $getId = $musician->where('id',$id)->get();
        $idd = $musician->find($id);
        $countrys = $country->get();
        return view('admin.musician.edit',compact('getId','idd','countrys'));
    }

    public function update($id,Request $req)
    {
        $musician = Musician::where('id',$id)->first();
        if ($req->has('img_edit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img_edit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_musician'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img_edit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $musician->img;
        }

       
        $data = [
            'id_country' => $req->id_countryedit,
            'name' => $req->name_edit,
            'des' => $req->des_edit,
            'img' => $fileExtension,
        ];

        // dd($data);
  
        $musician->update($data);
  
        return redirect()->route('view-musician');
    }
}
