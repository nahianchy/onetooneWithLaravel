<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $product = Product::create($request->all());

        $product->categories()->create([

            'categoryName' => $request->categoryName
        ]);

        return redirect(route('productIndex'));
    }

    public function edit($product_id)
    {
        $product = Product::findOrFail($product_id);

        return view('edit', compact('product'));
    }

    public function update(Request $request, $product_id)
    {
        $result = Product::findOrfail($product_id)->update(
            [
                'name' => $request->name,
                'description' => $request->description
            ]
        );

        $result = Category::findOrFail($product_id)->update(
            [

                'categoryName' => $request->categoryName
            ]
        );

        return redirect(route('productIndex'));
    }

    public function delete($product_id)
    {
        Product::findOrfail($product_id)->delete();

        return redirect()->back();
    }

    public function show($product_id)
    {
        $product=Product::findOrFail($product_id);

        return view('show',compact('product'));
    }
}
