<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, $id){
        $categories = Category::select(['id', 'name'])->get();
        $products = Product::select()->where('category_id', $id)->paginate();
        return view('product.index', compact('categories', 'products', 'id'));
    }
    public function show(Request $request,$id){
        return view('product.show');
    }

}
