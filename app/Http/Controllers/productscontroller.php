<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shope;
use App\category;
use App\product;
use App\order;
use Session;
class productscontroller extends Controller
{
    public function index(){
        $product= product::all();
        return view('products.all')->with('products', $product);
    }
    public function report(){
        $product= product::all();
        return view('products.report')->with('products', $product);
    }
    public function create(){
        $shope = shope::all();
        $category = category::all();
        return view('products.create')->with('categores',  $category)->with('shopes',$shope);
    }
    public function store(Request $request){
        $request->validate([
           'name' => 'required',
      
            'price' => 'required',
        ]);
        $product = new product();
        $product->price = $request->price ;
        $product->name = $request->name;
        $product->quntity = $request->quntity;
        $product->descrption = $request->descrption;
        $product->available_coler = $request->available_coler;
        $product->available_size = $request->available_size;
        $product->prand = $request->prand;
        $product->category_id = $request->category_id;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  $file->getClientOriginalName();
            $file->move('uploads/products', $filename );
            $product->image =  $filename;
        }else {
            return $request;
            $product->image = '';
        }

        $product->save();
        return redirect('/prodaucts');
    }
    public function show($id){

         $product= product::find($id);
        return view('products.show')->with('product', $product);
    }
    public function edit($id){

        $product= product::find($id);
        $category = category::all();
       return view('products.edit')->with('product', $product)->with('categores',  $category);
   }
   public function update(Request $request,$id){
   
    $product= product::find($id);
    $product->price = $request->price ;
    $product->name = $request->name;
    $product->quntity = $request->quntity;
    $product->descrption = $request->descrption;
    $product->available_coler = $request->available_coler;
    $product->available_size = $request->available_size;
    $product->prand = $request->prand;
    $product->category_id = $request->category_id;
    if($request->hasfile('image')){
        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $filename =  time().'.'.$ext;
        $file->move('uploads/products', $filename );
        $product->image =  $filename;
    }

    $product->save();
    Session::flash('SUCCESS','DONE EDIT NEW PRODUCT !');

    return redirect('/prodaucts');
}
 public function destroy($id){
    $product= product::find($id);
    $orders = order::all();

   
        if($product->orders->count() == 0) {
         
            Session::flash('SUCCESS','CATEGOREY DELETED !');
            return redirect('/prodaucts');
        }
        else{
            Session::flash('error','Cannot delete !');
            return redirect('/prodaucts');
       
        }
       
 }
}
