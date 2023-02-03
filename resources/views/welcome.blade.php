@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')

    <h1>algum tituio</h1>
        <img src="/img/banner.jpg" alt="Banner">
    @if (10 > 15)
        <p>A condição é true</p>
    @endif

        <p> {{ $nome }}</p>

    @if ($nome == 'Pedro')
        <p>O nome é pedro</p>
    @elseif($nome == 'Matheus')
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
    @else
        <p>O nome não é pedro</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if ($i == 2)
            <p> o i é 2</p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>{{ $nome }}</p>
    @endforeach

@endsection
