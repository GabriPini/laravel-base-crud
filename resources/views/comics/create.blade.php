@extends('layouts.app')

@section('content')
    <div class="bg-dark text-center p-5">

        <a class="btn btn-lg btn-primary" href="{{ route('comics.index') }}">Back to comics</a>

    </div>

    <div class="container">

        @include('partials.error')


        <form class="mt-5 " action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="p-2">
                    <input class="py-2 px-3 w-100 form-control @error('title') is-invalid @enderror" type="text" id="title"
                        name="title" placeholder="inserisci il titolo" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group">

                <div class="p-2">

                    <input class="py-2 px-3 w-100 form-control @error('thumb') is-invalid @enderror" type="text" id="thumb"
                        name="thumb" placeholder="inserisci l'url del thumb della copertina" value="{{ old('thumb') }}"
                        required>
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <div class="p-2">

                    <input class="py-2 px-3 w-100 form-control @error('price') is-invalid @enderror" type="text" id="price"
                        name="price" placeholder="inserisci il prezzo" value="{{ old('price') }}" required>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <div class="p-2">

                    <input class="py-2 px-3 w-100 form-control @error('series') is-invalid @enderror" type="text" id="series"
                        name="series" placeholder="inserisci la serie" value="{{ old('series') }}" required>
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <div class="p-2">

                    <input class="py-2 px-3 w-100 form-control @error('sale_date') is-invalid @enderror" type="text" id="sale_date"
                        name="sale_date" placeholder="inserisci la data di uscita" value="{{ old('sale_date') }}" required>
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <div class="p-2">

                    <input class="py-2 px-3 w-100 form-control @error('type') is-invalid @enderror" type="text" id="type"
                        name="type" placeholder="inserisci il tipo" value="{{ old('type') }}" required>
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <div class="p-2">

                    <textarea class=" py-4 px-3 w-100 form-control @error('description') is-invalid @enderror" type="text" id="description"
                        name="description" placeholder="inserisci la descrizione" required>
                        {{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="text-center">

                <button class="p-2 btn btn-lg btn-danger" type="reset">resetta i campi</button>
                <button class="p-2 btn btn-lg btn-success" type="submit">inserisci il nuovo fumetto</button>
            </div>

        </form>
    </div>


@endsection
