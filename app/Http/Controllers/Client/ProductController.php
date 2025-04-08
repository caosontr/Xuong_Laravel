<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $allProduct = Product::paginate(4); // Lấy tất cả sản phẩm phân trang
        return view("Clients.productpage", compact('allProduct'));
    }

    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ request
        $query = $request->input('query');

        // Tìm kiếm sản phẩm theo tên
        $allProduct = Product::where('name', 'like', '%' . $query . '%')->paginate(4);

        return view('Clients.productpage', compact('allProduct'));
    }
}
