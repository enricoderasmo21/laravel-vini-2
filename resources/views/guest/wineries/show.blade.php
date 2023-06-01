@extends('layouts/app')

@section('content')

<div id="vines-index"> 

    <div class="container">
        <h2 class="text-center"> {{$winery->name}} </h2>

        <div>{{$winery->address}}</div>
        <div>{{$winery->area}}</div>
        <div>{{$winery->district}}</div>
        <div>{{$winery->region}}</div>
        <div>{{$winery->nation}}</div>
        <div>{{$winery->phone}}</div>
        <div>{{$winery->email}}</div>
    </div>
        
</div>

    
@endsection