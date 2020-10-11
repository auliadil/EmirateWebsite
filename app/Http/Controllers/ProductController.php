<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function viewAllProducts() {
        $products = Product::all();
        return view('product/view-all-product', ['products'=>$products]);
    }

    public function viewProductDetail($id){
        $product = Product::find($id);
        return view('product/view-product-detail', ['product'=>$product]);
    }

}
