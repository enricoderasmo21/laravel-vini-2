@extends('layouts/app')

@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Indirizzo</th>
            <th scope="col">Comune</th>
            <th scope="col">Provincia</th>
            <th scope="col">Regione</th>
            <th scope="col">Nazione</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($wineries as $winery) 
            <tr>
                <td>{{$winery->name}}</td>
                <td> {{$winery->address}} </td>
                <td> {{$winery->area}} </td>
                <td> {{$winery->district}} </td>
                <td> {{$winery->region}} </td>
                <td> {{$winery->nation}} </td>
                <td> {{$winery->phone}} </td>
                <td> {{$winery->email}} </td>
                <td> <a href=" {{route('admin.wineries.show', $winery)}} ">Mostra</a></td>
            </tr>
            @endforeach
            
        </tbody>
      </table>

      <a href="{{route('admin.wineries.create')}}" class="btn btn-primary">Aggiungi</a>
  
</div>
    
@endsection