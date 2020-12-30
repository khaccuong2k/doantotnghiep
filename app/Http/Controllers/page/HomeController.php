<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Countrys;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Songs;
use App\Models\Singers;
use App\Models\Types;
use App\Models\Users;

class HomeController extends Controller
{
    public function view(Songs $songs,Singers $singers,Types $types,Countrys $countrys,Users $users,Events $events)
    {
        $countUser = $users->count();
        $countSong = $songs->count();
        $countType = $types->count();
        $countCountry = $countrys->count();
        $event = $events->orderBy('id','desc')->limit(1)->get();
        $song = $songs->where('id_type',1)->inRandomOrder()->limit(3)->get();
        $songRandum = $songs->inRandomOrder()->limit(3)->get();
        $newSong = $songs->orderBy('id','desc')->limit(3)->get();
        $cmSong = $songs->where('id_type',4)->inRandomOrder()->limit(3)->get();
        $hiphopSong = $songs->where('id_type',3)->inRandomOrder()->limit(3)->get();
        $song1 = $songs->where('id_type',2)->inRandomOrder()->limit(3)->get();
        $singer = $singers->all();
        return view('page.home',compact('event','song','song1','singer','hiphopSong','newSong','cmSong','songRandum','countUser','countSong','countType','countCountry'));
        // return view('master');
    }

}
