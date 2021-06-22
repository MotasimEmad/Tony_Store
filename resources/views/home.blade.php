@extends('layouts.index1')

@section('content')
<div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">All Products <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$productcount}}</h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> All Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$orderscount}}</h2>
                
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">All Customers<i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$count}}</h2>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-success">New Orders</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          
                            <th> User Name </th>
                            <th> Products </th>
                            <th> Show </th>
                           
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                         @foreach($users as $user)
                         @if($order->user_id == $user->id)
                          <tr>
                        
                            <td>
                           
                            
                            {{$user->name}}
                          
                          
                            </td>
                          
                            <td> 
                            {{$order->user_orders}} 
                            </td>
                          
                            <td>
                            <a class=" badge  badge-success mt-4" href="/order/{{$order->user_id}}"> Show</a>
                            </td>
                          </tr>
                          @endif
                            @endforeach
                           @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
