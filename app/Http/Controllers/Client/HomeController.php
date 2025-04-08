<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function Home()
    {
        $allProduct = Product::all();
        // dd($allProduct);
        return view("Clients.homepage", ['allProduct' => $allProduct]);
    }
}
