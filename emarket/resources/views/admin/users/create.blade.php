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

	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

		<div class="form-group">
		{!! Form::label('name', 'Full name') !!}
		<br><br>
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'John Doe', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::label('email', 'E-mail address') !!}
		<br><br>
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@mail.com', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::label('password', 'Password') !!}
		<br><br>
		{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**************', 'required']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::label('type', 'User type') !!}
		<br><br>
		{!! Form::select('type', ['admin' => 'Admin', 'member' => 'Regular user'], 'member', ['class' => 'form-control']) !!}
		<br><br>
		</div>

		<div class="form-group">
		{!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
		<br><br>
		</div>

	{!! Form::close() !!}
	<hr>
	<a href="{{route('users.index')}}" class="btn btn-info">Return to Users</a>

@endsection

	