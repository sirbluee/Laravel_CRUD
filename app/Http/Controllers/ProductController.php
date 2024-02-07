<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('admin.product.show', ['product' => $product]);
    }


    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'color' => $request->color,
            'price' => $request->price,
        ]);

        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'brand' => $request->brand,
            'color' => $request->color,
            'price' => $request->price,
        ]);

        return redirect(route('product.index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'));
    }
}
