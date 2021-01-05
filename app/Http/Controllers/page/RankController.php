<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Singers;
use App\Models\Songs;
use Illuminate\Http\Request;

class RankController extends Controller
{
    protected function view(Songs $songs,Singers $singers) {
        $song = $songs->orderBy('views','desc')->limit(10)->get();
        $singer = $singers->all();
        return view('page.rank',compact('song','singer'));
    }
}
