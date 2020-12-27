<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\models\BookEventModel;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookeventController extends Controller
{
    protected function view($id,Events $events) {
        $event = $events->where('id',$id)->get();
        return view('page.bookEvent',compact('event'));
    }

    protected function postBooking(BookEventModel $books,$id) {
        // dd(Auth::user()->id);
        $data = [
            'id_event' => $id,
            'id_user' => Auth::user()->id
        ];
        $books->create($data);
        return redirect()->back()->with('message','Đặt vé thành công');
    }
}
