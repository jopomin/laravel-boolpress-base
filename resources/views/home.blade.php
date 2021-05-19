@extends('layouts.app')

@section('title', 'Boolpress | Home Page')

@section('content')
    <a href="{{ route('articoli.index') }}">Guarda tutti i post di Boolpress</a>
{{--     <h1>La mia Home</h1> --}}
@endsection