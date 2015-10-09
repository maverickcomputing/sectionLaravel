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
              <li>
                Lorem ipsum dolor sit amet
              </li>
              <li>
                Consectetur adipiscing elit
              </li>
              <li>
                Integer molestie lorem at massa
              </li>
              <li>
                Facilisis in pretium nisl aliquet
              </li>
              <li>
                Nulla volutpat aliquam velit
              </li>
              <li>
                Faucibus porta lacus fringilla vel
              </li>
              <li>
                Aenean sit amet erat nunc
              </li>
              <li>
                Eget porttitor lorem
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>



@stop