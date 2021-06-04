@extends('layouts.master')
@section('title','Shopping')
@section('content')
<div class="amado_product_area section-padding-100">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">
                        <p>Showing 1-{{$products->perPage()}} 0f {{$products->total()}}</p>
                        <div class="view d-flex">
                            <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- Sorting -->
                    <div class="product-sorting d-flex">
                        <div class="sort-by-date d-flex align-items-center mr-15">
                            <p>Sort by</p>
                            <form action="" method="get" id="sort">
                                @php
                                    $selected = request()->input('sort_by', 'date');
                                @endphp
                                <select name="sort_by" id="sortBydate">
                                    <option value="date" @if('date' == $selected) selected @endif >Date</option>
                                    <option value="newest" @if('newest' == $selected) selected @endif >Newest</option>
                                    <option value="popular" @if('popular' == $selected) selected @endif >Popular</option>
                                </select>
                            </form>
                        </div>
                        <div class="view-product d-flex align-items-center">
                            <p>View</p>
                            <form action="#" method="get" id="paging">
                                @php
                                $selected = request()->input('p',12);
                                @endphp
                                <select name="p" id="viewProduct">
                                    <option value="12" @if(12 == $selected) selected @endif >12</option>
                                    <option value="24" @if(24 == $selected) selected @endif >24</option>
                                    <option value="48" @if(48 == $selected) selected @endif >48</option>
                                    <option value="96" @if(96 == $selected) selected @endif >96</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        @foreach($products as $product)
            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src="{{ asset('/assets/img/products-img/product1.jpg') }}" alt="">
                        <!-- Hover Thumb -->
                        <img class="hover-img" src="{{ asset('/assets/img/products-img/product2.jpg') }}" alt="">
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">${{$product->price}}</p>
                            <a href="{{route('products.show',[$product->id])}}">
                                <h6>{{$product->title}}</h6>
                            </a>
                        </div>
                        <!-- Ratings & Cart -->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <div class="cart">
                                <a href="{{route('shopping.cart')}}" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="{{ asset('/assets/img/core-img/cart.png') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Pagination -->
                {{$products->links('vendor.pagination.frontend')}}
            </div>
        </div>
    </div>
</div>
@stop

@section('js')
    <script type="text/javascript" lang="javascript">
        $( document ).ready(function() {
            $('#sort select').change(function(){
                $('#sort').submit();
            });
            $('#paging select').change(function(){
                $('#paging').submit();
            });
        });
    </script>
@stop

