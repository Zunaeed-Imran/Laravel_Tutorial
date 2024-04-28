@extends('layout')

@section('content')
    


<h1>Laravel 11 Learning</h1>

<h2>{{$heading}}</h2>


@foreach ($listings as $listing)
  <h2>
    <a href="/listings{{$listing['id']}}">{{$listing['title']}}</a>
  </h2>
  <h2>{{$listing['description']}}</h2>
@endforeach

@endsection