@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')


    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <nav class="navbar">
            <form action="" method="" class="form-inline  d-flex justify-content-center">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif

        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach

            @if (count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum evento com {{ $search }}! :(
                    <a href="/">Clique para ver todos os eventos</a>
                </p>
            @elseif(count($events) == 0)
                <p>Não há eventos disponíveis!</p>
            @endif
        </div>
    </div>


@endsection
