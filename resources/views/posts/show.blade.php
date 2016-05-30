@extends('main')
@section('title','| Pogledaj Vest')

@section('content')
	
		<h1>{{$post->naslov}}</h1>
		<p class="lead"> {{$post->body}}</p>

@endsection

