@extends('layouts.app')
@include('flash::message')

@section('content')
	<a href="{{route('products.create')}}" class="btn btn-info">Register NEW product</a>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>Quantity</th>
			<th>Storage ID</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($products as $product)
				<tr>
					<td>{{ $product->id }}</td>
					<td>{{ $product->name }}</td>
					<td>{{ $product->quantity }}</td>
					<td>{{ $product->storage_id}}</td>
					<td>
						<a href="{{ route('products.edit', $product->id) }}">Edit</a>
						<a href="{{ route('products.destroy', $product->id) }}" onClick="return confirm('Are you sure?')">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $products->render()!!}
	<hr>
	<a href="{{route('home')}}" class="btn btn-info">Return to main menu</a>
@endsection