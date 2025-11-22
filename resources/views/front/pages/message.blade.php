@extends('front.layout.pages-layout2')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Parkok listája')
@section('content')

@if(auth()->check())

    <h2>Üzenetek:</h2>

    @foreach($kapcsolat as $uzi)
        <h1>{{ $uzi->created_at }} : {{ $uzi->nev }} // üzenete: {{ $uzi->uzenet }}</h1>
    @endforeach

@else
    <h2>Először be kell jelentkezned</h2>
@endif

@endsection