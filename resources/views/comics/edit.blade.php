@extends('layouts.main')

@section('main-content')
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Titolo del fumetto</label>
            <input type="text" id="title" placeholder="Titolo del fumetto" name="title" value="{{$comic->title}}">
        </div>
        <div>
            <label for="">Descrizione</label>
            <input type="text" id="description" placeholder="Descrizione del fumetto" name="description" value="{{$comic->description}}" >
        </div>
        <div>
            <label for="">Copertina</label>
            <input type="text" id="thumb" placeholder="Url della copertina" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div>
            <label for="">Prezzo</label>
            <input type="text" id="price" placeholder="Prezzo del fumetto" name="price" value="{{$comic->price}}">
        </div>
        <div>
            <label for="">Serie</label>
            <input type="text" id="series" placeholder="Serie del fumetto" name="series" value="{{$comic->series}}">
        </div>
        <div>
            <label for="">Data di uscita</label>
            <input type="text" id="sale_date" placeholder="Data di uscita" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div>
            <label for="">Tipo di fumetto</label>
            <input type="text" id="type" placeholder="Tipo di fumetto" name="type" value="{{$comic->type}}">
        </div>  
        <a href="{{route('comics.index')}}">Torna alla lista dei fumetti</a>
        <button type="submit">Modifica</button>
    </form>
@endsection