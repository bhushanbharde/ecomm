@extends('master')
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
        
            @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1? 'active': ''}}">
                    <img class="d-block w-100 slider-img" src="{{$item['gallery']}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block desc">
                        <h3>{{$item['name']}}</h3>
                        <p>{{$item['description']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>

    <div class="treding-wrapper">
        <h3>Trending Products</h3>
        <div class="trending-item">
            @foreach ($products as $item)
                <a href="detail/{{$item['id']}}">
                    <div class="">
                        <img class="trending-img" src="{{$item['gallery']}}" alt="First slide">
                        
                        <div class="" style="text-align: center">
                            <h5>{{$item['name']}}</h5>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
@endsection