<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $product =  Product::with('category')->get();
        return view('index',compact('categories','product'));
    }
}
