@extends('layouts.layout');

@section('title')
	All prodicts
@stop

@section('body')
	@foreach($products as $product)
		<h1>{{$product->name}}</h1>
		<h3>{{$product->price}}</h3>
	@endforeach
@stop