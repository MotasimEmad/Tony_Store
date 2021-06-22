@extends('layouts.index1')
@section('content')

<div class="col-lg-12 ">
                <div class="card">
                  <div class="card-body">
                
                   
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Orders Counts</th>
                          <th>Sate Of Signing</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        @foreach($customers as $customer)
                          <td>{{$customer->id}}</td>
                          <td>{{$customer->name}}</td>
                          <td>{{$customer->phone_number}}</td>
                          <td>{{$customer->orders->count()}}</td>
                          <td>{{$customer->created_at}}</td>
                       
                      
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection