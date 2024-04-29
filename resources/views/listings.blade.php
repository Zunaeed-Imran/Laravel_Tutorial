@extends('layout')

@section('content')
    


<h1 class="text-red-500">{{$heading}}</h1>


@foreach ($listings as $listing)
  <h2>
    <a href="/listings{{$listing['id']}}">{{$listing['title']}}</a>
  </h2>
  <p>{{$listing['description']}}</p>
@endforeach



{{-- we also have php derictive  --}}

{{-- @php
  $test = 1;
@endphp
{{$test}} --}}




 {{-- condational directive  --}}
 @if(count($listings) == 0)
 <p>No listing Found</p>
 @endif 
 

 @endsection