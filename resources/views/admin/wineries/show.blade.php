@extends('layouts/app')

@section('content')

<div class="container">

    <h2 class="text-center">{{$winery->name}}</h2>

    
    {{-- @foreach($winery->wines as $wine)
    <div>{{$wine->name}}</div>
    @endforeach --}}

    <div>{{$winery->name}}</div>
    <div> {{$winery->address}} </div>
    <div> {{$winery->area}} </div>
    <div> {{$winery->district}} </div>
    <div> {{$winery->region}} </div>
    <div> {{$winery->nation}} </div>
    <div> {{$winery->phone}} </div>
    <div> {{$winery->email}} </div>

    <div>
        <a href="{{route('admin.wineries.edit', $winery)}}" class="btn btn-primary">Modifica</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            RIMUOVI
        </button>
    </div>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina il vitigno</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Sei sicuro di voler eliminare {{$winery->title}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                <form action="{{route('admin.wineries.destroy', $winery->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">RIMUOVI</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
    
@endsection

@section('script')

<script type="text/javascript">

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})

</script>

@endsection