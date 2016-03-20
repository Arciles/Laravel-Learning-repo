	@extends('layouts.layout')
	@section('title')
		about
	@stop

	@section('body')
		<div class="title">{{$greeting}}</div>
		<p>
			@if($flag)
				{ Whats up man }
			@else
				{ Register You fucker!!! }
			@endif
		</p>
	@stop

