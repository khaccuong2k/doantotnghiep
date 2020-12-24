<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class BookeventController extends Controller
{
    protected function view(Events $events) {
        $event = $events->orderBy('date','desc')->limit(1)->get();
        return view('page.bookEvent',compact('event'));
    }
}
