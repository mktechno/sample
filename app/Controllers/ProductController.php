<?php
namespace App\Controllers;

class ProductController extends BaseController
{
    public function index()
    {
        // echo 'i am product controller!';
        return view('frontend/product');
    }
     public function find($prod_name)
    {
        // echo 'product: ' .$prod_name;
        $data['name'] = $prod_name;
        return view('frontend/product', $data);
    }
}