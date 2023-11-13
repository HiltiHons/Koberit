<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $productName = 'Webserver XL';
        return view("product", compact("productName"));
    }

    function show($id)
    {
        $productID = $id;
        return view("showProduct", compact("productID"));
    }
}
