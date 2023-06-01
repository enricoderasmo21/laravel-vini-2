@extends('layouts.app')
@section('content')

<div id="home">
    <h1 class="text-center">HOME</h1>
    <div class="container _container">

        <div class="card" style="width: 18rem;">
            <div class="card-header text-center text-danger">
              Vini
            </div>
            <ul class="list-group list-group-flush">
                <li>
                    <a href="{{route('wines.index')}}">Esplora i vini</a>
                </li>
            </ul>
          </div>
    
          <div class="card" style="width: 18rem;">
            <div class="card-header text-center text-danger">
              Vitigni
            </div>
            <ul class="list-group list-group-flush">
                <li>
                    <a href="{{route('vines.index')}}">Esplora i vitigni</a>
                </li>
            </ul>
          </div>
    
          <div class="card" style="width: 18rem;">
            <div class="card-header text-center text-danger">
              Cantine
            </div>
            <ul class="list-group list-group-flush">
                <li>
                    <a href="{{route('wineries.index')}}">Esplora le cantine</a>
                </li>
            </ul>
          </div>
    </div>
</div>


@endsection