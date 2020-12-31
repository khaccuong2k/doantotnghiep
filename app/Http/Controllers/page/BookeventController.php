<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\models\BookEventModel;
use App\Models\Events;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookeventController extends Controller
{
    protected function view($id,Events $events) {
        $event = $events->where('id',$id)->get();
        return view('page.bookEvent',compact('event'));
    }

    protected function postBooking(BookEventModel $books,$id,Events $events,Users $users) {
        // dd(Auth::user()->id);
        $users = Users::select('total_money')->where('id',Auth::user()->id)->first();
        $event = $events->select('price')->where('id',$id)->first();
        // dd($event);
        $price = $event->getOriginal();
        // var_dump(Auth::user()->total_money);die();
        // var_dump($price);die();
        if(((int)$price['price']) <= ((int)Auth::user()->total_money)) {
            $data = [
                'id_event' => $id,
                'id_user' => Auth::user()->id
            ];
            $total = ((int)(Auth::user()->total_money)) - ((int)$price['price']);
            // dd($total);
            $users->where('id',$id)->update(['total_money' => $total,'qty_buy' => $price['price']]);
            $books->create($data);

            return redirect()->back()->with('message','Đặt vé thành công');
        } else {
            return redirect()->back()->with('message','Số tiền trong tài khoản của bạn không đủ, vui lòng nạp thêm');
        }
    }
}
