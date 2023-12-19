@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{route('comics.show',$comic)}}" method="POST">

        <div class="row flex-column  form-column">
            @csrf
            @method('PUT')
            <div class="col">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" placeholder="title" id="title" name="title"
                    value="{{ $comic->title }}">
            </div>
            <div class="col">
                <label for="description" class="form-label">description</label>
                <input type="text" class="form-control" placeholder="description" id="description" name="description"
                    value="{{ $comic->description }}">
            </div>
            <div class="col">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" placeholder="thumb" id="thumb" name="thumb"
                    value="{{ $comic->thumb }}">
            </div>
            <div class="col">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" placeholder="price" id="price" name="price"
                    value="{{ $comic->price }}">
            </div>
            <div class="col">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" placeholder="series" id="series" name="series"
                    value="{{ $comic->series }}">
            </div>
            <div class="col">
                <label for="sale_date" class="form-label">sale_date</label>
                <input type="text" class="form-control" placeholder="sale_date" id="sale_date" name="sale_date"
                    value="{{ $comic->sale_date }}">
            </div>
            <div class="col">
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" placeholder="type" id="type" name="type"
                    value="{{ $comic->type }}">
            </div>
            <div>
                <input class="m-3" type="submit" value="INVIA">
            </div>
        </div>
    </form>

</div>
@endsection