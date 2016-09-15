@extends('layouts.app')
@include('flash::message')

@section('content')
	<a href="{{route('users.create')}}" class="btn btn-info">Register new user</a>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Type</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->type }}</td>
					<td>
						<a href="{{ route('users.edit', $user->id) }}">Edit</a>
						<a href="{{ route('admin.users.destroy', $user->id) }}" onClick="return confirm('Are you sure?')">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render()!!}
	<hr>
	<a href="{{route('home')}}" class="btn btn-info">Return to main menu</a>
@endsection