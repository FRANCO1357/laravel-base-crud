@extends('layouts.main')

@section('main-content')
    @foreach ($comics as $comic)
        <ul>
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        </ul>
    @endforeach
@endsection