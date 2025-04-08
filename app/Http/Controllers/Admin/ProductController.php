<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Hiển thị danh sách sản phẩm
     */
    public function index()
    {
        $all_product = Product::all();
        echo"<pre>";
        print_r($all_product);
    }

    /**
     * Hiển thị form thêm sản phẩm
     */
    public function create()
    {
        // DB::table('products')->insert([
        //     'name' => 'Bàn Phím cơ an',
        //     'description' => 'kayla@example.com',
        //     'image' => 'kayla@example.com',
        //     'price' => 100000,
        // ]);
    }
    
    
    /**
     * Thực Hiện lưu sản phẩm sau khi submit form
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Xem Chi Tiết 1 sản phẩm theo id
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Hiển thị form sửa sản phẩm theo id
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Cập nhật sản phẩm sau khi sửa theo id
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Xóa sản phẩm
     */
    public function destroy(string $id)
    {
        //
    }
}
