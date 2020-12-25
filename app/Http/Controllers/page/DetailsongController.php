<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Singers;
use App\Models\Songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailsongController extends Controller
{
    protected function view($id,Songs $songs,Singers $singers) {
        $getView = Songs::select('views')->where('id',$id)->first();
        // $getView = $songs->select('views')->where('id',$id)->first();
        $views = $getView->getOriginal();
        $a = (int)$views['views'] + 1;
        // $data = [
        //     'views' => $a + 1
        // ];
        // var_dump($data);exit(); 

        $songs->where('id',$id)->update(['views' => $a]);
        $song = $songs->where('id',$id)->get();
        $singer = $singers->all();

        // dd($song);
        return view('page.detailSong',compact('song','singer'));
    }
}
