@extends('layouts.app')
@section('content')
<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header text-primary text-uppercase font-weight-bolder font-italic">
			View product/
			<a href="http://127.0.0.1:8000/add/product">insert product</a>
		</div>
		@if (session('deleteMsg'))
		<div class="alert alert-info">
			<h2 class="text text-primary">{{session('deleteMsg')}}</h2>
		</div>
		@endif
		<table class="table table-striped table-primary">
			<thead>
				<tr>

					<th scope="col">Si:No</th>
					<th scope="col">Product Name</th>
					<th scope="col">Product Description</th>
					<th scope="col">Product Price</th>
					<th scope="col">Product Quantity</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$product->product_name}}</td>
					<td>{{$product->product_description}}</td>
					<td>{{$product->product_price}}</td>
					<td>{{$product->product_quantity}}</td>
					<td><div class="btn-group" role="group" aria-label="Basic example">
						
						<a   href="{{ url('edit/product') }}/{{$product->id}}" class="btn btn-primary">Edit</a>
						<a   href="{{ url('delete/product') }}/{{$product->id}}" class="btn btn-danger">Delete</a>
					</div></td>
				</tr>
				@endforeach
				
				
			</tbody>
		</table>
	</div>
</div>
@endsection