@extends('master')
@section('content')

    <div class="container">
        <div class="row p-5">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h2>{{$product['name']}} </h2>
                <h4>Price : {{$product['price']}}</h4>
                <h4>Description :</h4>
                <p>{{$product['description']}}</p>
                <h4>Category : {{$product['category']}}</h4>
                <br>

                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">Add to Cart</button>
                    <button class="btn btn-success">Buy Nowt</button>
                </form>
            </div>
        </div>
    </div>
@endsection