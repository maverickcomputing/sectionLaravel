@extends('master')

@section('styles')
@stop

@section('content')

  <ul>
    @foreach($routes as $route)
      <li>
        <a href="/example3/{{ $route }}">{{ $route }}</a>
      </li>
    @endforeach

  </ul>



@stop