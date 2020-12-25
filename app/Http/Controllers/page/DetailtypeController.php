<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Singers;
use App\Models\Songs;
use App\Models\Types;
use Illuminate\Http\Request;

class DetailtypeController extends Controller
{
    protected function view($id,Songs $songs,Singers $singers,Types $types) {
        $song = $songs->where('id_type',$id)->limit(3)->get();
        $singer = $singers->all();
        $type = $types->where('id',$id)->get();
        return view('page.detailType',compact('song','singer','type'));
    }
}
