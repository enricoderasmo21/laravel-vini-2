@extends('layouts/app')

@section('content')

<div class="container">
    
    <form action="{{route('admin.vines.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label text-light" for="name">Nome</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value='{{old('name')}}'>
            
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label text-light" for="description">Descrizione</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value='{{old('description')}}'>
            
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div>Vino</div>
          <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            @foreach($wines as $wine)
            <input type="checkbox" class="btn-check" autocomplete="off" name="wines[]" value="{{$wine->id}}" id="wine-{{$wine->id}}">
            <label class="btn btn-outline-primary" for="wine-{{$wine->id}}">{{$wine->name}}</label>
            @endforeach
          </div>


        <button type="submit">Salva</button>
    </form>
  
</div>
    
@endsection