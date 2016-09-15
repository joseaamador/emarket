@extends('layouts.app')
@section('content')
@include('flash::message')
	@if(count($errors) > 0)	
		<div class="alert alert-danger" role="alert">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif

	{!! Form::open(['route' => 'products.store', 'method' => 'POST']) !!}

		<div class="form-group">
		{!! Form::label('name', 'Product name') !!}
		<br><br>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Samsung TV', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::label('quantity', 'Product quantity') !!}
		<br><br>
		{!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => '100', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
		<br><br>
		</div>

	{!! Form::close() !!}
	<hr>
	<a href="{{route('products.index')}}" class="btn btn-info">Return to Products</a>

@endsection