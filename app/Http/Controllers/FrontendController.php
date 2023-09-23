<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Banners;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Products::orderBy('created_at', 'desc')->get();
        $banners = Banners::all();
        return view('frontend.index', compact('products', 'banners'));
    }
}
