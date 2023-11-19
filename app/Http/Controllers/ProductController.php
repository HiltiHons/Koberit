<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::whereRaw("price < 15 AND price >= 7")->orderby('price', 'desc')->get();
        return view("product", compact("data"));
    }

    function show($id)
    {
        $productID = $id;
        return view("showProduct", compact("productID"));
    }
}
