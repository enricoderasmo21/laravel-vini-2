@extends('layouts/app')

@section('content')

<div class="index"> 

    <div class="container">
        <h2 class="text-center">Vitigni</h2>
        <div class='cards-container mt-5'>
            @foreach($vines as $vine)
            <div class="card" style="width: 18rem;">
                <div class="card-body d-flex flex-column justify-content-between">
                  <h5 class="card-title">{{$vine->name}}</h5>
                  <p class="card-text">{{$vine->description}}</p>
                  <a href="{{route('vines.show', $vine)}}" class="btn btn-primary">Vedi dettagli</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>

    
@endsection