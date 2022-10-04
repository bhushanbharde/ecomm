@extends('master')
@section('content')
    <style>
        p{
            margin: 5px;
        }
    </style>
   <div class="container">
        <h3 class="py-3">Your Orders</h3>
        {{-- <a href="/ordernow" class="btn btn-success mb-5">Order Now</a> --}}
        <br>
        @foreach ($orders as $item)
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
                        <h2>Name : {{$item->name}}</h2>
                        <p>Delivery Status : {{$item->status}}</p>
                        <p>Address : {{$item->address}}</p>
                        <p>Payment Status : {{$item->payment_status}}</p>
                        <p>Payment Method : {{$item->payment_method}}</p>
                    </div>
                </div>
            </div>
        @endforeach
   </div>
@endsection