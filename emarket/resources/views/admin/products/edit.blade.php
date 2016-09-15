@extends('layouts.app')
@include('flash::message')
@section('content')
	@if(count($errors) > 0)	
		<div class="alert alert-danger" role="alert">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(array('route' => ['products.update', $product->id], 'method' => 'PUT')) !!}

		<div class="form-group">
		{!! Form::label('name', 'Product name') !!}
		<br><br>
		{!! Form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'John Doe', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::label('quantity', 'Product quantity') !!}
		<br><br>
		{!! Form::number('quantity', $product->quantity, ['class' => 'form-control', 'placeholder' => '100', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
		<br><br>
		</div>

	{!! Form::close() !!}
	<hr>
	<a href="{{route('products.index')}}" class="btn btn-info">Return to Products</a>
@endsection