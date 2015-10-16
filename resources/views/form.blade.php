@extends('master')


@section('title',  $title ='Form Example')

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop

@section('content')
            <form action="/form/create" method='POST'>
              First name:<br>
              {{-- The following values have a bunch of code in them. What you're looking at is called
                   a ternary operator. It's basically a more compact if-else statement.
                   Here's a little explaination of it: http://davidwalsh.name/php-shorthand-if-else-ternary-operators

                    You could also replace that whole thing with if/else statements, but for use in
                    views, the ternary operators are a little less intrusive.
                     --}}
              <input type="text" name="firstname" value="{{ isset($request['firstname']) ? $request['firstname']: 'firstname' }}">
              <br>
              Last name:<br>
              <input type="text" name="lastname" value="{{ isset($request['lastname']) ? $request['lastname']: 'lastname' }}">
              <br>
              Favorite Animal:<br>
              <input type='text' name='animal' value='{{ isset($request['animal']) ? $request['animal'] : "favorite animal" }}'>This must contain the word "cats"
              {{-- DON"T FORGET CSRF TOKEN EXPLAINATION --}}
              {{-- I totally forgot to explain this, but we covered it in class.
                    if you're still unsure post in the slack section and I'd be happy
                    to explain --}}
              {!! csrf_field() !!}
              <br><br>
              <input type="submit" value="Submit">
            </form>
            @if( isset($request))
              You Submitted:
              <br>
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



@stop