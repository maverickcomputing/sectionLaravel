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
              <input type="text" name="firstname" value="{{ isset($request['firstname']) ? $request['firstname']: 'firstname' }}">
              <br>
              Last name:<br>
              <input type="text" name="lastname" value="{{ isset($request['lastname']) ? $request['lastname']: 'lastname' }}">
              <br>
              Favorite Animal:<br>
              <input type='text' name='animal' value=''>This must be "cats"
              {{-- DON"T FORGET CSRF TOKEN EXPLAINATION --}}
              {!! csrf_field() !!}
              <br><br>
              <input type="submit" value="Submit">
            </form>
            @if( isset($request))
              {{ $request['firstname'] }}
              <br>
              {{ $request['lastname'] }}
              <br>
              {{ $request['animal'] }}
              @endif

            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>



@stop