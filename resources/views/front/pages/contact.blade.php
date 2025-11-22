@extends('front.layout.pages-layout2')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Parkok listája')
@section('content')

<form action="/kapcsolat" method="POST">
    @csrf

    <label style="display:block; text-align:center;">Név:</label><br>
    <input style="width: 500px;display:block; margin:0 auto;" type="text" name="nev" required><br><br>

    <label style="display:block; text-align:center;">Üzenet:</label><br>
    <textarea style="width: 1000px; height: 150px;display:block; margin:0 auto;" name="uzenet" required></textarea><br><br>

    <button type="submit" style="display:block; margin:0 auto;" >Küldés</button>
</form>


@endsection