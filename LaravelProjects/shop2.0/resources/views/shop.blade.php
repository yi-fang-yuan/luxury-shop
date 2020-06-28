@extends('layout.app')

@section('content')
    <div class="gucciContainer">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <ul class="list-group ">
                    @foreach($categories as $category)
                        <li class="list-group-item"><a href="{{route('shop.index',['category'=>$category->id])}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-10">
            <div class="card-columns">
                    @foreach($products as $product)
                    <div class="card">
                        <a href="{{route('shop',$product->slug)}}"><img class="card-img-top " src="/{{$product->image}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <h5 class="text-center">{{$product->name}}</h5>
                            <p class="text-center font-weight-bold">$ {{$product->price}}</p>
                        </div>
                    </div>
                    @endforeach
            </div>
            </div>
        </div>
    </div>
    </div>

