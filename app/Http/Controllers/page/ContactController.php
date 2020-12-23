<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function view(Events $events) {
        $event = $events->limit(6)->get();
        return view('page.event',compact('event'));
    }
}
