<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'cpf'
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
