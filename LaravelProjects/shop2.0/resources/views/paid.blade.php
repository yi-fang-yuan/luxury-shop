@extends('layout.app')

@section('content')
     @if(session()->has('success_message'))
        <div class="text-center mt-5 pt-5">
            <h4 class="pb-4">{{session()->get('success_message')}}</h4>
            <a href="{{route('shop.index')}}"><button type="button" class="btn btn-outline-dark">Shop More?</button></a>
        </div>

             @endif

@endsection
