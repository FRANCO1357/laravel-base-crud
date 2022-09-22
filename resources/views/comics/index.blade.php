@extends('layouts.main')

@section('main-content')
    @foreach ($comics as $comic)
        <ul>
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a> <a href="{{route('comics.edit', $comic->id)}}">Modifica fumetto</a> <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina fumetto</button>
            </form></li>
        </ul>
    @endforeach
    <a href="{{route('home')}}">Torna alla home</a>
@endsection