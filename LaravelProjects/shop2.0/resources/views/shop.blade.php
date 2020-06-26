@extends('layout.app')

@section('content')
    <div class="gucciContainer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <ul class="list-group ">
                    <a href="{{route('shop.index')}}"><li class="list-group-item">Gucci</li></a>
                    <li class="list-group-item">Prada</li>
                    <li class="list-group-item">Hermes</li>
                    <li class="list-group-item">Dolce & Gabbana</li>
                </ul>
            </div>
            <div class="col-lg-10">
                <div class="card-deck">
                    @foreach($products as $product)
                        @if($product->id <= 3)
                    <div class="card">
                        <a href="{{route('shop',$product->slug)}}"><img class="card-img-top " src="/{{$product->image}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="text-center">{{$product->name}}</h5>
                            <p class="text-center font-weight-bold">$ {{$product->price}}</p>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
                <div class="card-deck">
                    @foreach($products as $product)
                        @if($product->id > 3 && $product->id <= 6)
                            <div class="card">
                                <a href="/shop/prada"><img class="card-img-top " src="/{{$product->image}}" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="text-center">{{$product->name}}</h5>
                                    <p class="text-center font-weight-bold">$ {{$product->price}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="card-deck">
                    @foreach($products as $product)
                        @if($product->id > 6 && $product->id <= 9)
                            <div class="card">
                                <a href="/shop/prada"><img class="card-img-top " src="/{{$product->image}}" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h5 class="text-center">{{$product->name}}</h5>
                                    <p class="text-center font-weight-bold">$ {{$product->price}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    </div>

