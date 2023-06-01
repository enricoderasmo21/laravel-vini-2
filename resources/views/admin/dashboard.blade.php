@extends('layouts/app')

@section('content')   
    
</div>

<div id="home">
    <h1 class="text-center">PAGINA DI AMMINISTRAZIONE</h1>
    <div class="container _container">

        <div class="card" style="width: 18rem;">
            <div class="card-header text-center text-danger">
              Vini
            </div>
            <ul class="list-group list-group-flush">
                <li>
                    <a href="{{route('admin.wines.index')}}">Gestisci i vini</a>
                </li>
            </ul>
          </div>
    
          <div class="card" style="width: 18rem;">
            <div class="card-header text-center text-danger">
              Vitigni
            </div>
            <ul class="list-group list-group-flush">
                <li>
                    <a href="{{route('admin.vines.index')}}">Gestisci i vitigni</a>
                </li>
            </ul>
          </div>
    
          <div class="card" style="width: 18rem;">
            <div class="card-header text-center text-danger">
              Cantine
            </div>
            <ul class="list-group list-group-flush">
                <li>
                    <a href="{{route('admin.wineries.index')}}">Gestisci le cantine</a>
                </li>
            </ul>
          </div>
    </div>
</div>
    
@endsection