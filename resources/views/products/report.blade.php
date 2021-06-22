@extends('layouts.index1')
@section('content')

<div class="col-lg-12 ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Products</h4>
                   
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Category</th> 
                          <th>Orders Count</th> 
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @foreach($products as $product)
                          <td>{{$product->id}}</td>
                          <td>{{$product->name}}</td>
                          <td>{{$product->price}}</td>
                          <td>{{$product->category->name}}</td>
                          <td>{{$product->orders->count()}}</td>
                      
                         
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection