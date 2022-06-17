@extends('layouts.app')

@section('content')
    <div class="bg-dark text-center p-5">

        <a class="btn btn-lg btn-primary" href="{{ route('comics.create') }}">Insert a new comic</a>

    </div>


    <div class="container mt-3">
        <div class="heading p-4 text-center">
            <h1>All Comics</h1>
        </div>
        <div class="row">



            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Thumb</th>
                        <th>Title</th>
                        <th>Series</th>
                        <th>Price</th>
                        <th>Sale Date</th>
                        <th>Type</th>
                        <th>Options</th>
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
                            <td>{{ $comic->sale_date}}</td>
                            <td>{{ $comic->type}}</td>
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
