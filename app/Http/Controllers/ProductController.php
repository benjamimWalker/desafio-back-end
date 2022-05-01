<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->get(['title', 'publisher', 'price', 'genre', 'writer']);
        $products = $products->sortBy('title');
        return response()->json($products);
    }

    public function store(ProductRequest $request)
    {
        return $this->product->create($request->all());
    }

    public function show($id)
    {
        $product = $this->product->find($id);

        if (!$product) {
            return response()->json(['message' => 'product not found'], 404);
        }

        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
