<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'num_order',
        'machine_detail',
        'desc',
        'adition',
        'document'
    ];
    public function user() {
      return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function sellState() {
      return $this->belongsTo(SellState::class, 'state_id', 'id');
    }
    public function machine() {
      return $this->belongsTo(Machine::class, 'machine_id', 'id');
    }
    public function provider() {
      return $this->belongsTo(Provider::class, 'provider_id', 'id');
    }
    public function client() {
      return $this->belongsTo(Client::class, 'client_id', 'id');
    }
    public function comment()
    {
        return $this->morphToMany(Comment::class);
    }

}
