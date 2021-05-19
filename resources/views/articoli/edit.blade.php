@extends('layouts.app')

@section('title', 'Boolpress | Modifica Post')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    
@section('content')
    <form action="{{ route('articoli.update', $articoli->id) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="name">EDIT Titolo</label>
            <input type="text" name="titolo" id="titolo" value="{{ $articoli['titolo'] }}">
        </div>

        <div>
            <label for="brand">Autore</label>
            <input type="text" name="autore" id="autore" value="{{ $articoli['autore'] }}">
        </div>

        <div>
            <label for="designer">Tema</label>
            <input type="text" name="tema" id="tema" value="{{ $articoli['tema'] }}">
        </div>

        <div>
            <label for="color">Battute</label>
            <input type="text" name="battute" id="battute" value="{{ $articoli['battute'] }}">
        </div>
        <button type="submit">Modifica Post</button>
    </form>
@endsection