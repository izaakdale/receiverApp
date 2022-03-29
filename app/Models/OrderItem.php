<?php

// order item contains details of one product inside an order e.g. if an order has 3 of one products, the
// quantity in order item will be 3

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
