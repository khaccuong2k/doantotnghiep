<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class BookeventController extends Controller
{
    protected function view($id,Events $events) {
        $event = $events->where('id',$id)->get();
        return view('page.bookEvent',compact('event'));
    }

    protected function postBooking(Request $req) {
        
    }
}
