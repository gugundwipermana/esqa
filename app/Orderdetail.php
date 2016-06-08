<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    //
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity'
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
}
