@extends('layouts.main')

@section('main-content')
<ul>
    <li>{{$comic->title}}</li>
    <li>{{$comic->description}}</li>
    <li>{{$comic->thumb}}</li>
    <li>{{$comic->price}}</li>
    <li>{{$comic->series}}</li>
    <li>{{$comic->sale_date}}</li>
    <li>{{$comic->type}}</li>
    <li><a href="{{route('comics.edit', $comic->id)}}">Modifica fumetto</a></li>
    <li><a href="{{route('comics.index')}}">Torna alla lista dei fumetti</a></li>
</ul>
@endsection