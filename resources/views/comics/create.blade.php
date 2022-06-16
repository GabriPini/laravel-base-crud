@extends('layouts.app')

@section('content')

<div class="bg-dark text-center p-5">

    <a  class="btn btn-lg btn-primary" href="{{ route('comics.index')}}">Back to comics</a>

</div>



    <form action="{{ route('comics.store')}}" method="POST">
        @csrf

        <div>

            <input type="text" id="title" name="title" placeholder="inserisci il titolo" required>

        </div>

        <div>

            <input type="text" id="description" name="description" placeholder="inserisci la descrizione"  required>

        </div>
        <div>

            <input type="text" id="thumb" name="thumb" placeholder="inserisci l'url del thumb della copertina"  required>

        </div>
        <div>

            <input type="text" id="price" name="price" placeholder="inserisci il prezzo"  required>

        </div>
        <div>

            <input type="text" id="series" name="series" placeholder="inserisci la serie"  required>

        </div>
        <div>

            <input type="text" id="sale_date" name="sale_date" placeholder="inserisci la data di uscita" required>

        </div>
        <div>

            <input type="text" id="type" name="type" placeholder="inserisci il tipo"  required>

        </div>

        <button type="reset">resetta i campi</button>
        <button type="submit">inserisci il nuovo ospite</button>

    </form>
@endsection
