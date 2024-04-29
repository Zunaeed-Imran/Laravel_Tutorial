@extends('layout')

@section('content')

@include('partials._search')

  <h2>{{$listing['title']}}</h2>
  <h2>{{$listing['description']}}</h2>

@endsection