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
                                    href="{{ route('comics.show', ['comic' => $comic->id]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                      </svg></a><br>
                                <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic]) }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                  </svg>
                                </a><br>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#delete-comic-{{ $comic->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                      </svg>
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
