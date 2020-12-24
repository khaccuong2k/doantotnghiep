<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Singers;
use App\Models\Songs;
use Illuminate\Http\Request;

class DetailsongController extends Controller
{
    protected function view($id,Songs $songs,Singers $singers) {
        $song = $songs->where('id',$id)->get();
        $singer = $singers->all();
        // dd($song);
        return view('page.detailSong',compact('song','singer'));
    }
}
