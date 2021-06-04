<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, $id){
        $perPage = $request->input('p', 8);

        $sortBy = $request->input('sort_by', 'date');
        $sortField = '';
        switch($sortBy)
        {
            case 'date':
                $sortField = 'created_at';
                break;
            case 'newest':
                $sortField = 'updated_at';
                break;
            case 'popular':
                $sortField = 'id';
                break;
        }

        $categories = Category::select(['id', 'name'])->get();
        $products = Product::select([
            'id',
            'slug',
            'title',
            'price',
            'quantity',
            'photo',
            'category_id',
        ]);
        if ($sortField)
        {
            $products->orderBy($sortField, 'DESC');
        }
        $products = $products->where('category_id', $id)->paginate($perPage)->withQueryString();

        return view('products.index', compact('categories', 'products', 'id'));
    }
    public function show(Request $request,$id){
        $product = Product::find($id,
            [
                'id',
                'slug',
                'title',
                'description',
                'price',
                'quantity',
                'photo',
                'category_id',
            ]
        );

        if ($product)
        {
            return view('products.show', compact('product'));
        }

        return abort(404);
    }

}
