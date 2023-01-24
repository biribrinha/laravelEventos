
    @extends('layouts.app')

    @section('title', 'home')

    @section('content')   
                <h1>bem vindo</h1>                         
                <a href="{{ url('/pokemons') }}">Ver pokemons</a>
    @endsection