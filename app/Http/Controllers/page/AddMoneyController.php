<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddMoneyController extends Controller
{
    protected function view() {
        return view('page.addmoney');
    }

    protected function postAddMoney(Request $req,$id,Users $users) {
        switch($req) {
            case ($req->value == 1):
                $total_moneys = $users->select('total_money')->where('id',Auth::user()->id)->first();
                $total_money = $total_moneys->getOriginal();
                $a = (int)$total_money['total_money'] + 20000;
                $users->where('id',$id)->update(['total_money' => $a]);
                return redirect()->back()->with('message','Bạn đã nạp tiền thành công');
                break;        
            case ($req->value == 2):
                $total_moneys = $users->select('total_money')->where('id',Auth::user()->id)->first();
                $total_money = $total_moneys->getOriginal();
                $a = (int)$total_money['total_money'] + 50000;
                $users->where('id',$id)->update(['total_money' => $a]);
                return redirect()->back()->with('message','Bạn đã nạp tiền thành công');
                break;        
            case ($req->value == 3):
                $total_moneys = $users->select('total_money')->where('id',Auth::user()->id)->first();
                $total_money = $total_moneys->getOriginal();
                $a = (int)$total_money['total_money'] + 100000;
                $users->where('id',$id)->update(['total_money' => $a]);
                return redirect()->back()->with('message','Bạn đã nạp tiền thành công');
                break;        
            case ($req->value == 4):
                $total_moneys = $users->select('total_money')->where('id',Auth::user()->id)->first();
                $total_money = $total_moneys->getOriginal();
                $a = (int)$total_money['total_money'] + 200000;
                $users->where('id',$id)->update(['total_money' => $a]);
                return redirect()->back()->with('message','Bạn đã nạp tiền thành công');
                break;        
            }
    }
}
