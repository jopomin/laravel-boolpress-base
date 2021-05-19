@extends('layouts.app')

@section('title', 'Boolpress | Inserisci Post')

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    
@section('content')
    <form action="{{ route('articoli.store') }}" method="post">
        @csrf
        @method('POST')

        <div>
            <label for="name">Titolo</label>
            <input type="text" name="titolo" id="titolo">
        </div>

        <div>
            <label for="brand">Autore</label>
            <input type="text" name="autore" id="autore">
        </div>

        <div>
            <label for="designer">Tema</label>
            <input type="text" name="tema" id="tema">
        </div>

        <div>
            <label for="color">Battute</label>
            <input type="text" name="battute" id="battute">
        </div>
        <button type="submit">Aggiungi Post</button>
    </form>
@endsection