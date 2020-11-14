{{-- Extends layout --}}
@extends('layouts.default')
{{-- Content --}}
@section('content')
    @if( session()->has('mensaje'))
        <script>
            $(document).ready(function () {
                $("#modal_mensaje").modal();
            });
        </script>
    @endif
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Casino Online</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class="row  mt-10">
            @if (count($juegos) > 0)
                @foreach ($juegos as $juego)
                    @if ($juego->estado)
                        <div class="card" style="width:33%">
                            <img class="card-img-top" src="{{ $juego->url_imagen }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $juego->nombre }}</h5>
                                <p class="card-text">{{ $juego->descripcion }}</p>
                                <a href="{{ $juego->url_juego }}" class="btn btn-primary">A Jugar!</a>
                                <a data-toggle="modal" data-target="#update_juego_modal" data-id_juego="{{ $juego->id }}"
                                    class="btn btn-success">Acciones</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="card text-white bg-warning my-5 py-4 text-center">
                    <div class="card-body">
                        <p class="text-white m-0">No se han encontrado juegos disponibles, disculpe las molestias.</p>
                    </div>
                </div>
            @endif
        </div>
    </div>

    @include('modals.modal_acciones_juego')
    @include('modals.modal_mensaje')

    <script src="/js/juegos/control.js"></script>

@endsection
