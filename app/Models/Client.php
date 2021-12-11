<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'rut',
        'direccion',
        'contacto'
    ];

    public function sell()
    {
        return $this->hasMany(Sell::class);
    }

}
