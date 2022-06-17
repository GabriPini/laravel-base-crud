@extends('layouts.app')

@section('content')

<div class="bg-dark text-center p-5">
    <a href="{{ route('comics.index') }}" class="btn btn-lg btn-primary">Mostrami tutto</a>

</div>

<div class="container">
<h1 class="text-center">Edit {{$comic->title}}</h1>
    @include('partials.error')

        <form class="mt-5 text-center " action="{{ route('comics.update', $comic )}}" method="POST">

            @method('PATCH')
            @csrf

            <div class="p-2">
                <h5>Titolo:</h5>
                <input class="py-2 px-3 w-100 form-control @error('title') is-invalid @enderror"" type="text" id="title" name="title" placeholder="inserisci il titolo" value="{{ $comic->title }}" required>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="p-2">
                <h5>Descrizione:</h5>
                <input  class="py-2 px-3 w-100 form-control @error('description') is-invalid @enderror"" type="text" id="description" name="description" placeholder="inserisci la descrizione" value="{{ $comic->description }}" required>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="p-2">
                <h5>Url immagine:</h5>
                <input class="py-2 px-3 w-100 form-control @error('thumb') is-invalid @enderror"" type="text" id="thumb" name="thumb" placeholder="inserisci l'url del thumb della copertina" value="{{ $comic->thumb }}" required>
                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="p-2">
                <h5>Prezzo:</h5>
                <input class="py-2 px-3 w-100 form-control @error('price') is-invalid @enderror"" type="text" id="price" name="price" placeholder="inserisci il prezzo" value="{{ $comic->price }}" required>
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="p-2">
                <h5>Serie:</h5>
                <input  class="py-2 px-3 w-100 form-control @error('series') is-invalid @enderror"" type="text" id="series" name="series" placeholder="inserisci la serie" value="{{ $comic->series }}" required>
                @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="p-2">
                <h5>Data di uscita:</h5>
                <input  class="py-2 px-3 w-100 form-control @error('sale_date') is-invalid @enderror"" type="text" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita" value="{{ $comic->sale_date }}" required>
                @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="p-2">
                <h5>Tipo:</h5>
                <input class="py-2 px-3 w-100 form-control @error('type') is-invalid @enderror"" type="text" id="type" name="type" placeholder="inserisci il tipo" value="{{ $comic->type }}" required>
                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>



            <button class="p-2 btn btn-lg btn-danger" type="reset">resetta i campi</button>
            <button  class="p-2 btn btn-lg btn-success" type="submit">Modifica i campi</button>

        </form>
</div>

@endsection
