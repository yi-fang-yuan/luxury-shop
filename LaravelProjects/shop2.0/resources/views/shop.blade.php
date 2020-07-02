@extends('layout.app')

@section('content')
    <div class="gucciContainer">
    <div class="container">
            <h2 class="text-center pb-3">{{$categoryName}}</h2>
            <div class="card-columns">
                    @foreach($products as $product)
                    <div class="card">
                        <a href="{{route('shop',$product->slug)}}"><img class="card-img-top " src="/{{$product->image}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="text-center">{{$product->name}}</h5>
                            <p class="text-center font-weight-bol">$ {{$product->price}}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
                {{$products->appends(Request::only('category'))->links()}}
    </div>
    </div>

