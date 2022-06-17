@extends('layouts.app')

@section('content')
    <div class="bg-dark text-center p-5">

        <a class="btn btn-lg btn-primary" href="{{ route('comics.create') }}">Insert a new comic</a>

    </div>


    <div class="container mt-3">
        <div class="row">



            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>thumb</th>
                        <th>title</th>
                        <th>series</th>
                        <th>price</th>
                        <th>options</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($comics  as $comic)
                        <tr>
                            <td scope="row">{{ $comic->id }}</td>
                            <td><img  width="50" src="{{ $comic->thumb }}" alt=""></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series}}</td>
                            <td>{{ $comic->price }}&euro;</td>
                            <td>
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">View</a><br>
                                <a href="{{ route('comics.edit', ['comic' => $comic]) }}">Edit </a><br>
                                <a href="#">Delete</a><br>
                        </tr>
                    @empty
                        <tr>
                            <td scope="row">No comics yet!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
