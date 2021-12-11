<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellState extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'desc'
    ];

    public function sell()
    {
        return $this->hasMany(Sell::class);
    }
}
