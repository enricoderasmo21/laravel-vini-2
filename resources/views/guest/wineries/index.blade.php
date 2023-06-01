@extends('layouts/app')

@section('content')

<div class="index"> 

    <div class="container">
        <h2 class="text-center">Cantine</h2>
        <div class='cards-container mt-5'>
            @foreach($wineries as $winery)
            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex flex-column justify-content-between">
                  <h5 class="card-title">{{$winery->name}}</h5>
                  <div>{{$winery->address}}</div>
                  <div>{{$winery->area}}</div>
                  <div>{{$winery->district}}</div>
                  <div>{{$winery->region}}</div>
                  <div>{{$winery->nation}}</div>
                  <div>{{$winery->phone}}</div>
                  <div>{{$winery->email}}</div>
                  <a href="{{route('wineries.show', $winery)}}" class="btn btn-primary">Vedi dettagli</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>

    
@endsection