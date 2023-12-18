@extends('layouts.app')
@section('content')
<section class="hero-img"></section>
<section class="container-card">
    <div class="container">
        <a class="m-3 text-center" href="{{route('comics.create')}}">
            <h2>Crea il tuo Comic</h2>
        </a>
        <div class="row">
            @forelse ($comics as $comic)
            <div class="card col-4">
                <a href="{{route('comics.show',$comic['id'] )}}">
                    <img class="thumb" src="{{$comic['thumb']}}" alt="">
                    <ul class="detail-comic">
                        <li>{{$comic['sale_date']}}</li>
                        <li>{{$comic['price']}}</li>
                        <li>{{ $comic['series']}}</li>
                        <li>{{$comic['type']}}</li>

                    </ul>
                    <div class="layout-filter"></div>
                </a>
            </div>

            @empty
            @endforelse

        </div>

    </div>
</section>

@endsection