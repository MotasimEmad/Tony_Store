@extends('layouts.index1')
@section('content')
<div class="col-md-3">
<a class="btn btn-block btn-md   btn-gradient-primary mt-4" href="/categores/create">+ Add a category</a>
</div>
<div class="col-lg-12 ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-primary" >all categores</h4>
                   
                    <table class="table">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>name</th>
                          <th>products</th>
                          <th>update</th>
                          <th>delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @foreach($categoress as $category)
                          <td>{{$category->id}}</td>
                          <td>{{$category->name}}</td>
                          <td><a class=" badge  badge-success mt-4" href="/category/products/{{$category->id}}">{{$category->products()->count()}} </a></td>
                          <td><a class=" badge  badge-warning mt-4" href="/category/edit/{{$category->id}}"> update</a></td>
                          <td><a class="badge  badge-danger mt-4" href="/category/delete/{{$category->id}}">delete</a></label></td>
                         
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection