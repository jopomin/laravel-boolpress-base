@extends('layouts.app')

@section('title', 'Boolpress | Articoli')

@section('content')
    <h1>I post di Boolpress</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TITOLO</th>
                <th>AUTORE</th>
                <th>TEMA</th>
                <th>BATTUTE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articoli as $articolo)
                <tr>
                    <th>{{  $articolo['id']  }}</th>
                    <td>{{  $articolo['titolo']  }}</td>
                    <td>{{  $articolo['autore']  }}</td>
                    <td>{{  $articolo['tema']  }}</td>
                    <td>{{  $articolo['battute']  }}</td>
                    <td>
                        <a href="{{  route('articoli.show', $articolo['id'])  }}">Dettagli</a>
                    </td>
                    <td>
                        <a href="{{  route('articoli.edit', $articolo['id'])  }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{  route('articoli.destroy', $articolo['id'])  }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('articoli.create') }}">Crea un nuovo post</a>
@endsection