@extends('admin.layouts.app')
@section('title', 'Create new a products')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new a product</h1>
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
    <form method="post" action="{{route('admin.products.update',$product->id)}}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title"  class="form-control @error('title') is-invalid @enderror" id="title" value="{{$product->title}}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category" value="{{$product->category_id}}">
            @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" value="{{$product->price}}">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" value="{{$product->quantity}}">
            @error('quantity')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_off" class="form-label">Sale off</label>
            <input type="text" name="sale_off" class="form-control @error('sale_off') is-invalid @enderror" id="sale_off" value="{{$product->sale_off}}">
            @error('sale_off')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control">{{$product->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@stop
