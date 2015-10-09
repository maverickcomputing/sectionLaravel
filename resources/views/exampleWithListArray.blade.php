@extends('master')


{{--@section('title',  $title)--}}

@section('styles')
  <link rel="stylesheet" href="/css/styles.css">
@stop

@section('content')

  <div class="container-fluid" id='home-container'>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <address>
              <strong>{{ $addressData['name'] }}</strong>
              <br /> {{ $addressData['name']}}
              <br /> {{ $addressData['street']}}
              <br /> <abbr title="Phone">P:</abbr> {{ $addressData['phone'] }}
            </address>
          </div>
          <div class="col-md-6">
            <ul>
              @foreach($listData as $data)
                <li>
                  {{ $data }}
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



@stop