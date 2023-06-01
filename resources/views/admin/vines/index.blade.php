@extends('layouts/app')

@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vines as $vine) 
            <tr>
                <td>{{$vine->name}}</td>
                <td> {{$vine->description}} </td>
                <td> <a href=" {{route('admin.vines.show', $vine)}} ">Mostra</a></td>
            </tr>
            @endforeach
            
        </tbody>
      </table>

      <a href="{{route('admin.vines.create')}}" class="btn btn-primary">Aggiungi</a>
  
</div>
    
@endsection