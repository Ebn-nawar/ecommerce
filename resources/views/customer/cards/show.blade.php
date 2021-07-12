@extends('layouts.user')
@section('title') Card @endsection
@section ('content')

<div class="container">
    <div class="row">
        @if ($card)
            <div class="col-md-8">
                @foreach ($card->items as $product)
                    <div class="card-md-2">
                        <div class="card-body">
                            <img src="{{asset('uploads/products/' . $product['img'])}}" alt="">
                            <h5 class="card-title">{{$product['name_product']}}</h5>
                            <div class="card-text">
                                {{$product['price']}}
                                <a href="" class="btn btn-danger btn-sm ml-4">Remove</a>
                                <input type="text" name="qty" id="qty" value="{{$product['qty']}}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">

            </div>
                
            @else
                <p>There are no items in the card</p>
        @endif
    </div>
</div>
@endsection