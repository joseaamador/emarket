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

	{!! Form::open(array('route' => ['users.update', $user->id], 'method' => 'PUT')) !!}

		<div class="form-group">
		{!! Form::label('name', 'Full name') !!}
		<br><br>
		{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'John Doe', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::label('email', 'E-mail address') !!}
		<br><br>
		{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@mail.com', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::label('type', 'User type') !!}
		<br><br>
		{!! Form::select('type', ['admin' => 'Admin', 'member' => 'Regular user'], 'member', ['class' => 'form-control']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
		<br><br>
		</div>

	{!! Form::close() !!}
	<hr>
	<a href="{{route('users.index')}}" class="btn btn-info">Return to Users</a>
@endsection