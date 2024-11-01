<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.home');
    }
}