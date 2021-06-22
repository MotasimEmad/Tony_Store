<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;
use App\User;
use Illuminate\Support\Facades\DB;
class orderscontroller extends Controller
{
    //show the order from home
    public function show($id){

      $order = order::where('user_id','=',$id)->where('state','=','new')->get();
       $user = User::find($id);
       $orderditel = order::where('user_id','=',$id)->where('state','=','new')->latest()->first();
      
     return view('ordes.show')->with('orders',$order)->with('user',$user)->with('orderditel',$orderditel);

    }
    public function pinding($id){
      $order = order::where('user_id','=',$id)->where('state','=','new')->update(['state'=>'pinding']);
      return redirect('/home');
    }
    public function pindingindex()
    {
      $order = DB::table('orders')->select(DB::raw('count(*) as user_orders,user_id','state'))
      ->where('state','=','pinding')
      ->groupBy('user_id')
      ->get();
     $users = User::all();
     return view('ordes.pinding')->with('orders',$order)->with('users',$users);
    }
    public function showpinding($id){


      $order = order::where('user_id','=',$id)->where('state','=','pinding')->get();
       $user = User::find($id);
       $orderditel = order::where('user_id','=',$id)->where('state','=','pinding')->latest()->first();
      
     return view('ordes.pindingshow')->with('orders',$order)->with('user',$user)->with('orderditel',$orderditel);

    }
    public function deleverd($id){
      $order = order::where('user_id','=',$id)->where('state','=','pinding')->update(['state'=>'dlivared']);
      return redirect('/orderspinding/index');
    } 
    public function delverdindex()
    {
      $order = DB::table('orders')->select(DB::raw('count(*) as user_orders,user_id','state'))
      ->where('state','=','dlivared')
      ->groupBy('user_id')
      ->get();
     $users = User::all();
     return view('ordes.delverd')->with('orders',$order)->with('users',$users);
    }
    public function showdeleverd($id){


      $order = order::where('user_id','=',$id)->where('state','=','dlivared')->get();
       $user = User::find($id);
       $orderditel = order::where('user_id','=',$id)->where('state','=','dlivared')->latest()->first();
      
     return view('ordes.delverdshow')->with('orders',$order)->with('user',$user)->with('orderditel',$orderditel);

    }

}
