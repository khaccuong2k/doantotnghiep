<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Singers;
use App\Models\Songs;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected function view(Request $request,Songs $songs,Singers $singers) {
        $singer = $singers->all();
        $song = $songs->where('name','like','%'.$request->name.'%')
                                // ->orwhere('unit_price',$req->key)
                                ->get();
        return view('page.search',compact('song','singer','req->name'));
    }
}
