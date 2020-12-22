<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Types;
use App\Models\Singers;
use App\Models\Musician;
use App\Models\Songs;
use App\Models\Countrys;
use App\Models\Users;
use App\Models\Albums;

class SongController extends Controller
{
    public function view(Songs $songs,Singers $singers)
    {
        $song = $songs->orderBy('id','desc')->paginate(10);
        $singer = $singers->orderBy('id','desc')->get();
        // dd($singer);
        return view('admin.song.view',compact('song','singer'));
    }

    public function add(Types $types,Musician $musicians,Countrys $countrys,Singers $singers,Albums $albums,Users $users)
    {
        $type = $types->orderBy('id','desc')->get();
        $musician = $musicians->orderBy('id','desc')->get();
        $country = $countrys->orderBy('id','desc')->get();
        $singer = $singers->orderBy('id','desc')->get();
        $user = $users->orderBy('id','desc')->get();
        $album = $albums->orderBy('id','desc')->get();
        // dd($countrys);
        return view('admin.song.add',compact('type','musician','country','singer','album','user'));
    }

    public function create(Request $req, Songs $song)
    {
        // dd($req->file('imgm'));
        if ($req->file('img')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('img')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_song'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('img')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
			// return redirect()->back()->with('error', 'Upload files thất bại!');
        }
        if ($req->file('file')->isValid()) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtensionn = $req->file('file')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/file'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('file')->move($uploadPath, $fileExtensionn);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
			// return redirect()->back()->with('error', 'Upload files thất bại!');
        }
        $data = [
            'id_type' => $req->id_type,
            'id_singer' => $req->id_singer,
            'id_country' => $req->id_country,
            'id_musician' => $req->id_musician,
            'id_album' => 1,
            'id_user' => 1,
            'name' => $req->name,
            'img' => $fileExtension,
            'price' => $req->price,
            'file' => $fileExtensionn,
            'des' => $req->des,
            'views' => $req->views,
            'bought' => $req->bought,
            'copyright' => $req->copyright
        ];

        // dd($data);
        $song->create($data);
        return redirect()->route('view-song');
    }

    public function delete(Request $req,Songs $songs)
    {
        if($req->ajax())
        {
            $song = $songs->where('id', $req->id)->first();
            
            $song->delete();
            return response(['success'=>'Xóa Thành Công']);
        }
    }
    
    public function edit($id,Request $req,Songs $songs,Types $types,Musician $musicians,Countrys $countrys,Singers $singers,Albums $albums,Users $users)
    {
        $getId = $songs->where('id',$id)->get();
        $idd = $songs->find($id);
        $type = $types->orderBy('id','desc')->get();
        $musician = $musicians->orderBy('id','desc')->get();
        $country = $countrys->orderBy('id','desc')->get();
        $singer = $singers->orderBy('id','desc')->get();
        $user = $users->orderBy('id','desc')->get();
        $album = $albums->orderBy('id','desc')->get();
        return view('admin.song.edit',compact('getId','idd','type','musician','country','singer','user','album'));
    }

    public function update($id,Request $req)
    {
        $songs = Songs::where('id',$id)->first();
        if ($req->has('imgEdit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtension = $req->file('imgEdit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/img/img_song'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('imgEdit')->move($uploadPath, $fileExtension);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtension = $songs->img;
        }
        if ($req->has('fileEdit')) {
			// File này có thực, bắt đầu đổi tên và move
			$fileExtensionn = $req->file('fileEdit')->getClientOriginalName(); // Lấy . của file
			
			// Thư mục upload
			$uploadPath = public_path('/upload/file'); // Thư mục upload
			
			// Bắt đầu chuyển file vào thư mục
			$req->file('fileEdit')->move($uploadPath, $fileExtensionn);
            
			// Thành công, show thành công
			// return redirect()->back()->with('success', 'Upload files thành công!');
		}
		else {
			// Lỗi file
            $fileExtensionn = $songs->img;
        }

       
        $data = [
            'id_type' => $req->id_typeEdit,
            'id_singer' => $req->id_singerEdit,
            'id_country' => $req->id_countryEdit,
            'id_musician' => $req->id_musicianEdit,
            'id_album' => $req->id_albumEdit,
            'id_user' => $req->id_userEdit,
            'name' => $req->nameEdit,
            'img' => $fileExtension,
            'price' => $req->priceEdit,
            'file' => $fileExtensionn,
            'des' => $req->desEdit,
            'views' => $req->viewsEdit,
            'bought' => $req->boughtEdit,
            'copyright' => $req->copyrightEdit
        ];

        // dd($data);
  
        $songs->update($data);
  
        return redirect()->route('view-song');
    }
}
