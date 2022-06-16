@extends('layouts.app')

@section('content')
<div class="bg-dark text-center p-5">

    <a class="btn btn-lg btn-primary" href="{{ route('comics.create')}}">Insert a new comic</a>

</div>


<div class="container mt-3">
<div class="row">

    @foreach ($comics as $comic )
    <div class="col-12">

        <div class="card">
            <img src="{{$comic->thumb}}" width="200" alt="">
            <h3>{{$comic->title}}</h3>
            <p>{{$comic->description}}</p>
            <a href="{{ route('comics.edit', ['comic'=>$comic])}}">Edit Comic</a>
            <a href="{{ route('comics.show', ['comic'=> $comic->id])}}">Read more</a>

        </div>

    </div>



    @endforeach
</div>
</div>
@endsection
