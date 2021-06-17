<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::select(['id', 'title', 'price', 'quantity', 'sale_off'])
            ->orderBy('id', 'desc')
            ->paginate(config('constants.admin_perpage'));

        return view('admin.products.index', compact('products'));
    }
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

        return redirect(route('admin.products.list'))
            ->with('success', 'The product is created success!');
    }
    /*public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }
    public function update(UpdateProductRequest $request,$id){
        $product = Product::find($id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->title);
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->sale_off = $request->sale_off;
        $product->description = $request->description;
        $product->save();
        return redirect(route('admin.products.list'));
    }*/
    public function show($id)
    {
        //
    }

    public function edit(Request $request, $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy(Request $request)
    {
        $product = Product::find($request->item);

        if ($product)
        {
            $product->delete();
            return redirect()->route('admin.products.list')->with('success', 'Xoa thanh cong');
        }

        return redirect()->route('admin.products.list')->withErrors(['error', 'Co loi trong qua trinh xoa']);
    }
}
