@extends('layouts.app')

@section('content')


<div class="bg-dark p-5 text-center">
    <a class="btn btn-primary btn-lg " href="{{ route('comics.index')}}">Back to comics</a>
</div>

    <div class="mt-4 container bg-white">
        <img src="{{$comic->thumb}}" width="200" alt="">
        <h3>{{$comic->title}}</h3>
        <h5>{{$comic->series}}</h5>
        <h5>{{$comic->type}}</h5>
        <h5>&euro;{{$comic->price}}</h5>
        <h5>{{$comic->sale_date}}</h5>
        <p>{{$comic->description}}</p>
    </div>
@endsection
