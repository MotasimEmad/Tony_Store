@extends('layouts.index1')
@section('content')
        <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                  <div class="card">
                     <div class="card-body">
                       <div class="clearfix">
                         <h4 class="card-title text-info float-left">Customer Info</h4>
                         </div>
                          <table class="table">
                           <thead>   
                            <tr>
                             <th>#</th>
                             <th> User Name</th>
                             <th>Phone Number</th>
                            </tr>
                           </thead> 
                           <tbody>
                          <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone_number}}</td>
                          </tr>
                          </tbody>
                        </table>
                     </div>
                  </div>
              </div>
      
              <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-info">Order Info</h4>
                   
                     <table class="table">
                      <thead>
                        <tr>
                          <th>Address</th>
                          <th> Payment Method</th>
                      
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{$orderditel->addres}}</td>
                          <td>{{$orderditel->payment_method}}</td>
                       
                        </tr>
                       
                      </tbody>
                     </table>
                </div>
              </div>
            </div>
         </div>  
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-info">Order Products</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Proudact Name</th>
                            <th> Quntity </th>
                            <th> Total Price </th>
                           
                          </tr>
                        </thead>
                        <tbody>
                       
                          <tr>
                          @foreach($orders as $proudact)
                            <td>
                              {{$proudact->product->name}}
                            </td>
                            <td>
                            {{$proudact->total}}
                            </td>
                            <td>
                            {{$proudact->product->price}} * {{$proudact->total}}
                            </td>
                           
                          </tr>
                      @endforeach
                          
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5 grid-margin">
                
                            <form  action="/order/deleverd/{{$user->id}}" method='POST' >
                            @csrf
                            
                             <button type='submit' class='form-control btn btn-gradient-success btn-lg'>Delivered</button> 
                             
                            
              </div>
            </div>


@endsection