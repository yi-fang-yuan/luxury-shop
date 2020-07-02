@extends('layout.app')

@section('content')
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                    <div>
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{session()->get('success')}}
                            </div>

                        @endif
                    </div>
                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantity</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach(Cart::content() as $item)
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                        <a href="{{route('shop', $item->model->slug)}}"><img src="/{{$item->model->image}}" alt="" class="cart-table-img rounded shadow-sm"></a>
                                        <div class="ml-3 d-inline-block align-middle">
                                            <a href="{{route('shop',$item->model->slug)}}" class="text-dark d-inline-block align-middle"><h5 class="mb-0">{{$item->model->name}}</h5></a>
                                            <span class="text-muted font-weight-normal font-italic d-block">{{$item->model->details}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong>${{$item->subtotal}}</strong></td>
                                <td class="border-0 align-middle">
                                    <strong>
                                        <select class="quantity" data-id="{{$item->rowId}}">
                                            <option {{ $item->qty == 1 ? 'selected' : '' }}>1</option>
                                            <option {{ $item->qty == 2 ? 'selected' : '' }}>2</option>
                                            <option {{ $item->qty == 3 ? 'selected' : '' }}>3</option>
                                            <option {{ $item->qty == 4 ? 'selected' : '' }}>4</option>
                                            <option {{ $item->qty == 5 ? 'selected' : '' }}>5</option>

                                        </select></strong></td>
                                <td class="border-0 align-middle">
                                    <form action="{{route('cart.delete',$item->rowId)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn  btn-dark">Remove</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </div>

            <div class="row py-5 p-4 bg-white rounded shadow-sm">
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                    <div class="p-4">
                        <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                        <div class="input-group mb-4 border rounded-pill p-2">
                            <input type="text" placeholder="Apply coupon" aria-describedby="button-addon3" class="form-control border-0">
                            <div class="input-group-append border-0">
                                <button id="button-addon3" type="button" class="btn btn-dark px-4 rounded-pill"><i class="fa fa-gift mr-2"></i>Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller</div>
                    <div class="p-4">
                        <p class="font-italic mb-4">If you have some information for the seller you can leave them in the box below</p>
                        <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                    <div class="p-4">
                        <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
                        <ul class="list-unstyled mb-4">
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>${{Cart::subtotal()}}</strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>${{Cart::addCost('shipping',20)}}20.00</strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>${{Cart::tax()}}</strong></li>
                            <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                                <h5 class="font-weight-bold">${{Cart::total()}}</h5>
                            </li>
                        </ul><a href="{{route(('checkout.index'))}}" class="btn btn-dark rounded-pill py-2 btn-block">Proceed to checkout</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('extra-js')
<script src="{{asset('js/app.js')}}"></script>
    <script>
        (function(){
           const quantity = document.querySelectorAll('.quantity')
           quantity.forEach(element =>element.addEventListener('change', async function(){
               const id = element.getAttribute('data-id');
               const res = await axios.put(`/cart/${id}`,{
                   quantity: this.value
               });
              window.location.href= '{{route('cart.index')}}'
           }))
        })();
    </script>
    @endsection
