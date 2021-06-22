<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use DB;

class custmerscontroller extends Controller
{
    public function index(){
$users = User::where('role', '=','coustmar')->orderBy('id', 'DESC')->get();
    return view('custmores.index')->with('customers',$users);
    }
    public function report(){
        $users = User::where('role', '=','coustmar')->orderBy('id', 'DESC')->get();
        
    return view('custmores.report')->with('customers',$users);

    }
}
