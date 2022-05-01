<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'unit_price',
        'costumer_id',
        'product_id',
        'total_price'
    ];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
