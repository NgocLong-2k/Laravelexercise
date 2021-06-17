<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $products = Product::select([
            'id',
            'title',
            'slug',
            'price',
            'quantity',
            'photo',
            'category_id',
            'sale_off',
        ])->with('category')->paginate();

        $lastPage = $products->lastPage();
        if ($page > $lastPage)
        {
            return redirect()->route('products.index', ['page' => $lastPage]);
        }

        return $products;
    }

    public function show($id)
    {
        $product = Product::with('category')->find($id,
            [
                'id',
                'title',
                'slug',
                'description',
                'price',
                'quantity',
                'photo',
                'category_id',
                'sale_off',
            ]);

        if ($product)
        {
            return $product;
        }

        throw new ModelNotFoundException("404: Product [$id] not found!");
    }

    public function store(Request $request)
    {
        $p = Product::create($request->all());
        if ($p)
        {
            return $p;
        }

        return response()->json(
            ['error'=>'Product is not create'],
            422
        );
    }
}
