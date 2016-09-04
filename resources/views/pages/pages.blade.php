@extends('layout')
	
	@section('content')
            
            	@if (empty($people))
            		
            		There are not people.
            		
            	@else
            	
            		Something else here.
            		
            	@endif
               	
               	<ul>
               	
	               	@foreach ($people as $person)
	               		
	               		<li>{{ $person }}</li>
	               		
	               	@endforeach
               	
               	</ul>
               	
               	@unless (empty($people))
               		
               		There are some pleople.
               		
               	@endunless
               	
     @stop