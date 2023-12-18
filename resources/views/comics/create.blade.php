@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <form action="{{route('comics.store')}}" method="POST"> --}}
        <form action="{{route('comics.store')}}" method="post">

            <div class="row flex-column  form-column">
                @csrf
                <div class="col">
                    <input type="text" class="form-control" placeholder="title" id="title">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="description" id="description">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="thumb" id="thumb">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="price" id="price">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="series" id="series">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="sale_date" id="sale_date">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="type" id="type">
                </div>
                <div>
                    <input class="m-3" type="submit" value="INVIA">
                </div>
            </div>
        </form>

</div>
@endsection