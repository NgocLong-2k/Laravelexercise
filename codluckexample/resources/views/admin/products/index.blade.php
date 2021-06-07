@extends('admin.layouts.app')
@section('title', 'Products')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Products</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <caption>List of products</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Photo</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Safe off</th>
                <th>-</th>
            </tr>
            </thead>
            <tbody>
            @forelse($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->title}}</td>
                    <td>{{$product->photo}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->sale_off}}</td>
                    <td>
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('admin.products.edit',$product->id)}}">Edit</a></li>
                                <li><a class="dropdown-item" href="#">Preview</a></li>
                                <li><a class="dropdown-item" href="#">Publish</a></li>
                                <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No products!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{$products->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
@stop
