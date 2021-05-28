@extends('layouts.app')
@section('title','Home')
@section('content')
<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        @foreach($categories as $category)
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="{{route('product.index',[$category->id])}}">
                <img src="{{asset('/assets/img/bg-img/1.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{$category->min_price}}</p>
                    <h4>{{$category->name}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- Product Catagories Area End -->
@stop
