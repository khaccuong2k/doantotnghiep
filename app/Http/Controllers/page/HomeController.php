<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Songs;
use App\Models\Singers;
use App\Models\Types;

class HomeController extends Controller
{
    public function view(Songs $songs,Singers $singers,Types $types)
    {
        $song = $songs->where('id_type',1)->inRandomOrder()->limit(3)->get();
        $song1 = $songs->where('id_type',3)->inRandomOrder()->limit(3)->get();
        $singer = $singers->all();
        // $singer = $singers->where('id',18)->get();
        // dd($song);
        // dd(Auth::user()->role);
        return view('page.home',compact('song','song1','singer'));
        // return view('master');
    }

}
