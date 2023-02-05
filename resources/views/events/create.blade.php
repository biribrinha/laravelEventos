@extends('layouts.main')

@section('title', 'Criar Evento')


@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">


        <h1 class="text-center eventosTitulo">Crie seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- -
                    sem o csrf op laravel não aceita adicionar no banco
                    medida de segurança
                    ] --}}

            <div class="form-group">
                <label for="image">Insira a imagem do evento:</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>


            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>

            <div class="form-group">
                <label for="title">O que vai acontecer no envento:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city"
                    placeholder="Local do evento (cidade)">
            </div>

            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <input type="submit" class="btn btn-outline-success my-2 my-sm-0" value="Criar Evento">

        </form>
    </div>

@endsection
