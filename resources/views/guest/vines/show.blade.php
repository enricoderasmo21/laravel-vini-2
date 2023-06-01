@extends('layouts/app')

@section('content')

<div id="vines-index"> 

    <div class="container">
        <h2 class="text-center"> {{$vine->name}} </h2>

        <p> {{$vine->description}} </p>
        
    </div>
</div>

    
@endsection