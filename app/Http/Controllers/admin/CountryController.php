<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Countrys;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    public function create(Request $req, Countrys $country)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_country'); // Thư mục upload
			
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
        $country->create($data);
        return redirect()->route('view-country');
    }

    public function view(Countrys $country)
    {
        $countrys = $country->orderBy('id','desc')->get();
        return view('admin.country.view',compact('countrys'));
    }

    public function delete(Request $req,Countrys $country)
    {
        if($req->ajax())
        {
            $admin = $country->where('id', $req->id)->first();
            
            $admin->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Countrys $country)
    {
        $getId = $country->where('id',$id)->get();
        $idd = $country->find($id);
        return view('admin.country.edit',compact('getId','idd'));
    }

    public function update($id,Request $req)
    {
        $country = Countrys::where('id',$id)->first();
        if ($req->has('img_edit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img_edit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_country'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img_edit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $country->img;
        }

       
        $data = [
            'name' => $req->name_edit,
            'des' => $req->des_edit,
            'img' => $fileExtension,
        ];
  
        $country->update($data);
  
        return redirect()->route('view-country');
    }
}
