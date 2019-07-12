<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    // property to insert
    protected $fillable = [
        'product_name', 'product_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsToMany(Order::class, 'product_id');
    }

    public function orderdetail()
    {
        return $this->belongsToMany(OrderDetail::class, 'product_id');
    }
}
