@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <a class="link" href="/">Home</a>
            /<a class="link" href="{{route('shop.index')}}"> Shop</a>
            /<p class="link">{{$product->name}}</p>
        </div>

    </div>
    <div class="gucciContainer">
        <div class="container">

        <div class="row">
            <div class="col-lg-7">
                <img src="/{{$product->image}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-lg-5">
                <h1 class="text-center pb-3">{{$product->name}}</h1>
                <h3 class="text-center text-uppercase font-weight-light pb-5 mb-3">{{$product->details}}</h3>
                <h4 class=" text-justify">{{$product->description}}</h4>
            </div>
        </div>
        </div>
    </div>

@endsection
