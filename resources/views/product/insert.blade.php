@extends('layouts.app')
@section('content')
<div class="col-md-6 offset-md-3">
<div class="card">
  <div class="card-header text-primary text-uppercase font-weight-bolder font-italic">
  	Add product
  	/
  	<a href="http://127.0.0.1:8000/view/product">view product</a>
  </div>
  @if (session('success'))
  <div class="alert alert-info">
  	<h2 class="text text-primary">{{session('success')}}</h2>
  </div>
  @endif
     @if ($errors->all())
    <div class="alert alert-danger">
    	@foreach ($errors->all() as $error)
    		<li>{{$error}}</li>
    	@endforeach
    </div>
   @endif
  
  <div class="card-body">
    <form action="product/insert" method="POST">
	@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" name="product_name" class="form-control"  placeholder="Product name" value="{{old('product_name')}}">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product description</label>
    <textarea rows="4" cols=""   name="product_description" class="form-control"  placeholder="Product description">{{old('product_description')}}</textarea> 
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product price</label>
    <input type="text" name="product_price" class="form-control" value="{{old('product_price')}}"  placeholder="Product price">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product quantity</label>
    <input type="text" name="product_quantity" class="form-control" value="{{old('product_quantity')}}"  placeholder="Product quantity">
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>
@endsection
