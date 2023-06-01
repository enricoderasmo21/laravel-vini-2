@extends('layouts/app')

@section('content')

<div class="index"> 
    <div class="container">
        <h2 class="text-center">Vini</h2>
        <div class='cards-container mt-5'>
            @foreach($wines as $wine)
            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex flex-column justify-content-between">
                  <h5 class="card-title">{{$wine->name}}</h5>
                  <p class="card-text">{{$wine->description}}</p>
                  <div> {{$wine->year}} </div>
                  <a href="{{route('wines.show', $wine)}}" class="btn btn-primary">Vedi dettagli</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>

    
@endsection