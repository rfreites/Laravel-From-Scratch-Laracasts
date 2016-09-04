@extends('layout')

@section('content')
	
	<h1> {{ $card->title }} </h1>
	
	<ul class="list-unstyled">
	@foreach ($card->notes as $note)
		
		<li>{{ $note->body }}</li>
	
	@endforeach
	</ul>

@stop