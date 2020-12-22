<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Songs;
use App\Models\Singers;

class HomeController extends Controller
{
    public function view(Songs $songs,Singers $singers)
    {
        $song = $songs->limit(8)->get();
        $singer = $singers->where('id',18)->get();
        // dd($singer);
        // dd(Auth::user()->role);
        return view('page.home');
    }

}
