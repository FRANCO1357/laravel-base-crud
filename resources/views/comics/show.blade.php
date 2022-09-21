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
</ul>
@endsection