<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'street',
        'city',
        'state',
        'country',
        'costumer_id'
    ];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }
}
