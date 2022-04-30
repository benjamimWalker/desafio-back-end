<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'costumer_id'
    ];

    public function costumer()
    {
        return $this->belongsTo(Costumer::class);
    }
}
