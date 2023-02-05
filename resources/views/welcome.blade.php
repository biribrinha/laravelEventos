@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <nav class="navbar">
            <form class="form-inline  d-flex justify-content-center">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">10/01/2023</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{ $event-> id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection
