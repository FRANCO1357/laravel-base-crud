@extends('layouts.main')

@section('main-content')

@if (session('deleted'))
    <p>{{session('deleted')}}</p>
@endif

    @foreach ($comics as $comic)
        <ul>
            <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a> <a href="{{route('comics.edit', $comic->id)}}">Modifica fumetto</a> 
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina fumetto</button>
                </form></li>
        </ul>
    @endforeach
    <a href="{{route('home')}}">Torna alla home</a>
@endsection

@section('extra-js')
<script>
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const hasConfirmed = confirm('Sicuro di voler eliminare il fumetto?');
            if(hasConfirmed) form.submit();
        });
    })

</script>
@endsection

