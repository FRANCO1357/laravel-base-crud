@extends('layouts.main')

@section('main-content')
    @foreach ($comics as $comic)
        <ul>
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
            <li>{{$comic->description}}</li>
            <li>{{$comic->thumb}}</li>
            <li>{{$comic->price}}</li>
            <li>{{$comic->series}}</li>
            <li>{{$comic->sale_date}}</li>
            <li>{{$comic->type}}</li>
        </ul>
    @endforeach
@endsection