
           

@extends('layouts.index1')
@section('content')
<div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-success">Delevried Orders</h4>
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
                            <a class=" badge  badge-success mt-4" href="/order/dev/show/{{$order->user_id}}"> Show</a>
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