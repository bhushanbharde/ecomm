@extends('master')
@section('content')

   <div class="container">
        <h3 class="py-3">Your Cart</h3>
        <a href="/ordernow" class="btn btn-success mb-5">Order Now</a>
        <br>
        @foreach ($products as $item)
            <div class="row divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                            <img class="trending-img" src="{{$item->gallery}}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-sm-5">
                    <div class="">
                        <h2>{{$item->name}}</h2>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a href="/removecart/{{$item->cart_id}}">
                </div>
            </div>
        @endforeach
   </div>
@endsection