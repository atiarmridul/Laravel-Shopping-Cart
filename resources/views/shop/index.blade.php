@extends('layouts.master')

@section('title') 
    Shopping
@endsection

@section('content')
    @foreach($products->chunk(3) as $productChunk)
    <div class="row">
        @foreach($productChunk as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <img src="{{ $product->imagePath}}" alt="{{ $product->imagePath}}" style="width:200px;height:250px;">
            <div class="caption">
                <h3 class="text-center">{{ $product->title }}</h3>
                <p class="description">{{ $product->description }}</p>
                <div class="pull-left"><strong>${{ $product->price }}</strong></div><a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach 
@endsection