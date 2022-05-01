<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleRequest;
use App\Models\Product;
use App\Models\Sale;

class SaleController extends Controller
{
    private Sale $sale;

    public function __construct(Sale $sale)
    {
        $this->sale = $sale;
    }

    public function store(SaleRequest $request)
    {
        $product = Product::find($request->product_id);

        return $this->sale->create(
            array_merge(
                $request->all(),
                [
                    'unit_price' => $product->price,
                    'total_price' => $product->price * $request->amount,
                ]
            )
        );
    }
}
