<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    //

    public function index()
    {
        $data = DB::table('products')
            ->join('categories', 'categories.id', 'products.categoryId')
            ->select('products.id','products.name as title','products.price','categories.name')
            ->get();

        return view('product.index', ['data' => $data]);

    }
}
