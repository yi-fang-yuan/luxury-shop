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
            <div class="col-lg-5">
                <img src="/{{$product->image}}" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-lg-7 pl-4">
                <h1 class="text-center pb-3">{{$product->name}}</h1>
                <h4 class="text-center text-uppercase font-weight-light pb-5 mb-3">{{$product->details}}</h4>
                <p class=" text-justify pt-2">{{$product->description}}</p>
                <div class="pt-3">
                    <form action="{{route('cart.store')}}" method="POST">
                        @csrf
                        <div class="text-center pt-5">
                            <input type="hidden" name="id" value="{{$product->id}}">
                            <input type="hidden" name="name" value="{{$product->name}}">
                            <input type="hidden" name="price" value="{{$product->price}}">
                            <button type="submit" class="btn  btn-dark">
                                Add To Cart
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>

@endsection
