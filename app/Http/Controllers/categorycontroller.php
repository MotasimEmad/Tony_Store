<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
use Session;
class categorycontroller extends Controller
{
    public function index(){
        $category = category::all();
        return view('categores.index')->with('categoress',$category);
    }
    public function create(){
        return view('categores.create');
    }
    public function store(Request $request){
        $request->validate([
           'name' => ['required', 'unique:categories', 'max:255'],
           'image' => 'required',
        ]);
        $category = new  category();
        $category->name = $request->name;

      if($request->hasfile('image')){
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename =  $file->getClientOriginalName();
        $file->move('uploads/categores', $filename );
        $category->image =  $filename;
    }else {
        return $request;
        $category->image = '';
    }

      $category->save();
        return redirect('/categores');
    }
  
    public function products($id){
        $category = category::find($id);
        return view('categores.products')->with('categor',$category);
    }

    public function edit($id){
        $category = category::find($id);
        return view('categores.edit')->with( 'category',$category);
    }
    public function update(Request $request,$id){
       
        $category = category::find($id);
        $category->name = $request->name;
      $category->descrption = $request->descrption;
      if($request->hasfile('image')){
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename =  time().'.'.$ext;
        $file->move('uploads/categores', $filename );
        $category->image =  $filename;
    }else {
        return $request;
        $category->image = '';
    }

      $category->save();
        return redirect('/categores');
    }


    public function destroy($id){
        $category = category::find($id);
        $products = product::all();
   
        foreach( $products as  $product){
         if($product->category_id == $category->id) {
          
            Session::flash('error','Can not delete  !');
            return redirect('/categores');
         }
         else{
        $category->delete();
        Session::flash('SUCCESS','CATEGOREY DELETED !');
        return redirect('/categores');
         }
        }
    }
}
