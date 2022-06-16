@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-dark text-center p-5">
    <a href="{{ route('comics.index') }}" class="btn btn-lg btn-primary">Mostrami tutto</a>

</div>

@endsection
