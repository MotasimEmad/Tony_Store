<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon as time;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\User;
use App\order;
use App\product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::count();
        $count = $user - 1;
        $productcount = product::count();
        $orderscount = order::count();
        $order = DB::table('orders')->select(DB::raw('count(*) as user_orders,user_id','state'))
        ->where('state','=','new')
        ->groupBy('user_id')
        ->get();
       $users = User::all();
        return view('home')->with('count',$count)->with('orders',$order)->with('users',$users)->with('productcount',$productcount)->with('orderscount',$orderscount);
    }
}
