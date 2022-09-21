@extends('layouts.main')

@section('main-content')
    <main>
        <nav>
            <ul>
                <li><a href="{{route('comics.index')}}">Lista dei fumetti</a></li>
                <li><a href="{{route('comics.create')}}">Crea un nuovo fumetto</a></li>
            </ul>
        </nav>
    </main>
@endsection