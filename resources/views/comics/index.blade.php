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
                            <td><img width="50" src="{{ $comic->thumb }}" alt=""></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->price }}&euro;</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('comics.show', ['comic' => $comic->id]) }}">View</a><br>
                                <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic]) }}">Edit
                                </a><br>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-comic-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="delete-comic-{{ $comic->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modelTitle-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete comic {{ $comic->title }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    Are tou sure ? this operation is irreversible
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>

                                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
