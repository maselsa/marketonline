<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use hasfactory;
    protected $fillable = [
        'user_id', 
        'status'
    ];

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function total()
    {
        return $this->items()->sum(fn($i)=>$i->quantity*$i->price);
    }
}
