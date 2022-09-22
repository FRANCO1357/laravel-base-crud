@extends('layouts.main')

@section('main-content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div>
            <label for="">Titolo del fumetto</label>
            <input type="text" id="title" placeholder="Titolo del fumetto" name="title">
        </div>
        <div>
            <label for="">Descrizione</label>
            <input type="text" id="description" placeholder="Descrizione del fumetto" name="description">
        </div>
        <div>
            <label for="">Copertina</label>
            <input type="text" id="thumb" placeholder="Url della copertina" name="thumb">
        </div>
        <div>
            <label for="">Prezzo</label>
            <input type="text" id="price" placeholder="Prezzo del fumetto" name="price">
        </div>
        <div>
            <label for="">Serie</label>
            <input type="text" id="series" placeholder="Serie del fumetto" name="series">
        </div>
        <div>
            <label for="">Data di uscita</label>
            <input type="text" id="sale_date" placeholder="Data di uscita" name="sale_date">
        </div>
        <div>
            <label for="">Tipo di fumetto</label>
            <input type="text" id="type" placeholder="Tipo di fumetto" name="type">
        </div>  
        <a href="{{route('home')}}">Torna alla home</a>
        <button type="reset">Cancella</button>
        <button type="submit">Crea</button>
    </form>
@endsection