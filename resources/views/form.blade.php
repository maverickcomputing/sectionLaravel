@extends('master')


@section('title',  $title ='Form Example')

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop

@section('content')

  <div class="container-fluid" id='home-container'>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <form action="/form/create" method='POST'>
              First name:<br>
              <input type="text" name="firstname" value="Mickey">
              <br>
              Last name:<br>
              <input type="text" name="lastname" value="Mouse">
              {{-- DON"T FORGET CSRF TOKEN EXPLAINATION --}}
              {!! csrf_field() !!}
              <br><br>
              <input type="submit" value="Submit">
            </form>
            @if( isset($request))
              {{ $request['firstname'] }}
              <br>
              {{ $request['lastname'] }}
              @endif
          </div>
        </div>
      </div>
    </div>
  </div>



@stop