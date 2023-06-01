@extends('layouts/app')

@section('content')

<div class="container">

    <h2 class="text-center">{{$vine->name}}</h2>

    <p class="mt-5"> {{$vine->description}}</p>

    <div>
        <a href="{{route('admin.vines.edit', $vine)}}" class="btn btn-primary">Modifica</a>
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
              Sei sicuro di voler eliminare {{$vine->title}}?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                <form action="{{route('admin.vines.destroy', $vine->id)}}" method="POST">
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