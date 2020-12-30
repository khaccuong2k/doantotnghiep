<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Countrys;
use App\Models\Events;
use App\Models\Singers;
use App\Models\Songs;
use App\Models\Types;
use App\Models\Users;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    protected function view(Songs $songs,Singers $singers,Types $types,Countrys $countrys,Users $users,Events $events) {
        $songRandum = $songs->inRandomOrder()->limit(8)->get();
        $song = $songs->where('id_type',1)->inRandomOrder()->limit(8)->get();
        $hiphopSong = $songs->where('id_type',3)->inRandomOrder()->limit(8)->get();
        $cmSong = $songs->where('id_type',4)->inRandomOrder()->limit(8)->get();
        $song1 = $songs->where('id_type',2)->inRandomOrder()->limit(8)->get();
        $newSong = $songs->orderBy('id','desc')->limit(8)->get();
        $singer = $singers->all();
        return view('page.detailFromHome',compact('song','songRandum','newSong','cmSong','hiphopSong','song1','singer'));
    }
}
