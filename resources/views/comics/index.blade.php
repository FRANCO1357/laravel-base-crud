@extends('layouts.main')

@section('main-content')
    @foreach ($comics as $comic)
        <ul>
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a> <a href="{{route('comics.edit', $comic->id)}}">Modifica fumetto</a></li>
        </ul>
    @endforeach
    <a href="{{route('home')}}">Torna alla home</a>
@endsection