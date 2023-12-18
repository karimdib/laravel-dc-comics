@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row show-row  text-center  p-5">
        <div class="card col-4">
            <img class="thumb" src="{{$comics['thumb']}}" alt="">
        </div>
        <div>{{$comics['description']}}</div>
    </div>
    <a href="{{route('comics.index')}}">
        <h2 class="text-center m-3">Torna Indietro</h2>
    </a>
</div>
@endsection