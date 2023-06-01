@extends('layouts/app')

@section('content')

<div class='index'> 

    <div class="container">
        <h2 class="text-center"> {{$wine->name}} </h2>

        <div class="text-center">
            <div>Anno: {{$wine->year}} </div>
            <div>Colore: {{$wine->color}} </div>
            <div>Tipo: {{$wine->type}} </div>
            <div>Acidità: {{$wine->acidity}} </div>
        </div>
    </div>
</div>

    
@endsection