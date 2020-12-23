<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function view(Events $events)
    {
        $event = $events->orderBy('id','desc')->get();
        // dd($type);
        return view('admin.event.view',compact('event'));
    }

    public function create(Request $req, Events $event)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_event'); // Thư mục upload
			
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
            'date' => $req->date,
            'address' => $req->address
        ];

        // dd($data);
        $event->create($data);
        return redirect()->route('view-event');
    }

    public function delete(Request $req,Events $event)
    {
        if($req->ajax())
        {
            $type = $event->where('id', $req->id)->first();
            
            $type->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Events $events)
    {
        $getId = $events->where('id',$id)->get();
        $idd = $events->find($id);
        return view('admin.event.edit',compact('getId','idd'));
    }

    public function update($id,Request $req)
    {
        $event = Events::where('id',$id)->first();
        if ($req->has('img_edit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img_edit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_event'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img_edit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $event->img;
        }

       
        $data = [
            'name' => $req->name_edit,
            'des' => $req->des_edit,
            'img' => $fileExtension,
            'address' => $req->address_edit
        ];

        // dd($data);
  
        $event->update($data);
  
        return redirect()->route('view-event');
    }
}
