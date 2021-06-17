<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $withProduct = $request->input('with_product', false);
        if ('true' == $withProduct)
        {
            $categories = Category::with(['products'=>function($q){
                $q->select(['id', 'slug', 'title', 'price', 'category_id']);
            }])->get();
        }else
        {
            $categories = Category::all();
        }

        return $categories;
    }
}
