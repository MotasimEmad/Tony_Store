@extends('layouts.index1')
@section('content')
<div class="col-md-4">
<a class="btn btn-block btn-lg   btn-gradient-primary mt-4" href="/prodaucts/create">+ Add a project</a>
</div>
<div class="col-lg-12 ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">all proudacts</h4>
                   
                    <table class="table">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>name</th>
                          <th>prand</th>
                          <th>prise</th>
                          <th>quntity</th>
                          <th>avelable size</th>  
                          <th>category</th> 
                          <th>update</th>
                          <th>delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @foreach($products as $product)
                          <td>{{$product->id}}</td>
                          <td>{{$product->name}}</td>
                          <td>${{$product->prand}}</td>
                          <td>{{$product->price}}</td>
                          <td>{{$product->quntity}}</td>
                          <td>{{$product->available_size}}</td>
                          <td>{{$product->category->name}}</td>
                          <td><a class=" badge  badge-warning mt-4" href="/#"> update</a></td>
                          <td><a class="badge  badge-danger mt-4" href="/#">delete</a></label></td>
                         
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection