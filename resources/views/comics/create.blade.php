@extends('layouts.main')

@section('main-content')

    @if ($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>    
    @endif

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div>
            <label for="">Titolo del fumetto</label>
            <input type="text" id="title" placeholder="Titolo del fumetto" name="title" value="{{old('title')}}">
        </div>
        <div>
            <label for="">Descrizione</label>
            <input type="text" id="description" placeholder="Descrizione del fumetto" name="description" value="{{old('description')}}">
        </div>
        <div>
            <label for="">Copertina</label>
            <input type="text" id="thumb" placeholder="Url della copertina" name="thumb" value="{{old('thumb')}}">
        </div>
        <div>
            <label for="">Prezzo</label>
            <input type="text" id="price" placeholder="Prezzo del fumetto" name="price" value="{{old('price')}}">
        </div>
        <div>
            <label for="">Serie</label>
            <input type="text" id="series" placeholder="Serie del fumetto" name="series" value="{{old('series')}}">
        </div>
        <div>
            <label for="">Data di uscita</label>
            <input type="text" id="sale_date" placeholder="Data di uscita" name="sale_date" value="{{old('sale_date')}}">
        </div>
        <div>
            <label for="">Tipo di fumetto</label>
            <input type="text" id="type" placeholder="Tipo di fumetto" name="type" value="{{old('type')}}">
        </div>  
        <a href="{{route('home')}}">Torna alla home</a>
        <button type="reset">Cancella</button>
        <button type="submit">Crea</button>
    </form>
@endsection