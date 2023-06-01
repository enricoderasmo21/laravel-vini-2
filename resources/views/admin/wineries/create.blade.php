@extends('layouts/app')

@section('content')

<div class="container">
    
    <form action="{{route('admin.wineries.store')}}" method="POST">
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
            <label class="form-label text-light" for="address">Indirizzo</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value='{{old('address')}}'>
            
            @error('address')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label text-light" for="area">Comune</label>
            <input type="text" class="form-control @error('area') is-invalid @enderror" id="area" name="area" value='{{old('area')}}'>
            
            @error('area')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label text-light" for="district">Provincia</label>
            <input type="text" class="form-control @error('district') is-invalid @enderror" id="district" name="district" value='{{old('district')}}'>
            
            @error('district')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label text-light" for="region">Regione</label>
            <input type="text" class="form-control @error('region') is-invalid @enderror" id="region" name="region" value='{{old('region')}}'>
            
            @error('region')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label text-light" for="nation">Nazione</label>
            <input type="text" class="form-control @error('nation') is-invalid @enderror" id="nation" name="nation" value='{{old('nation')}}'>
            
            @error('nation')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label text-light" for="phone">Telefono</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value='{{old('phone')}}'>
            
            @error('phone')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label text-light" for="email">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value='{{old('email')}}'>
            
            @error('email')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
          </div>

          <div>Vino</div>
          <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            @foreach($wineries as $winery)
            <input type="checkbox" class="btn-check" autocomplete="off" name="wineries[]" value="{{$winery->id}}" id="winery-{{$winery->id}}">
            <label class="btn btn-outline-primary" for="winery-{{$winery->id}}">{{$winery->name}}</label>
            @endforeach
          </div>

        <button type="submit">Salva</button>
    </form>
  
</div>
    
@endsection