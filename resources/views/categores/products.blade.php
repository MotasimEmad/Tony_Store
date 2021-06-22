@extends('layouts.index1')
@section('content')

<div class="card card-default">                   
	<div class="card-body">
		<div class="row">

          @foreach($categor->products as $product)
			<div class="col-md-6 col-xl-3">
                                      
				<div class="card mb-4">
				<img class="card-img-top" src="{{ URL::asset('uploads/products/'.$product->image) }}">
					<div class="card-body">
					  <h5 class="card-title text-primary">{{$product->name}}</h5>
                      <p class="card-text pb-3">category: {{$categor->name}} </p>
					  <p class="card-text pb-3">${{$product->price}} </p>
					  <a href="/prodaucts/show/{{$product->id}}" class="btn   btn-outline-primary">show</a>
                                                   
                                                    
                    </div>
			</div>
                                        
		</div>
                                      
         @endforeach
										
		</div>
	</div>
</div>
@endsection