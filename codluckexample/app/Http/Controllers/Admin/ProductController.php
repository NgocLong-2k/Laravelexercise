<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.products.create');
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['user_id'] = 1;

        Product::create($data);

        return redirect(route('home'));
    }
}
