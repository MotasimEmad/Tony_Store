<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shope;
class shopescontroller extends Controller
{
    public function index(){
        return view('shopes.index');
    }
    public function create(){
        return view('shopes.create');
    }
    public function store(Request $request){
        $request->validate([
           'name' => 'required',
           'phone_number' => 'required'|'unique' ,
            'descrption' => 'required',
        ]);
        $shope = new shope();
        $shope->name = $request->name;
        $shope->phone_number = $request->phoneNumber;
        $shope->descrption = $request->descrption;
        $shope->save();
        return redirect('/shopes');
    }
  
}
