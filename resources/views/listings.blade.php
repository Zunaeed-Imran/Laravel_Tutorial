@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

     {{-- condational directive  --}}
 @if(count($listings) == 0)
 <p>No listing Found</p>
 @endif 


@foreach ($listings as $listing)
    <x-listing-card :listing="$listing" />
@endforeach



{{-- we also have php derictive  --}}

{{-- @php
  $test = 1;
@endphp
{{$test}} --}}





 

 @endsection