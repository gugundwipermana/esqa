<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id',
        'code',
        'address',
        'status'
    ];

    public function orderdetails()
    {
        return $this->hasMany('App\Orderdetail');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
