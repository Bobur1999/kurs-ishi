<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table = 'orders';
    public $fillable = ['address_id'];

    public function getAddress()
    {
        return $this->belongsTo(Address::class,'address_id','id');
    }
    public function getOrderProducts()
    {
        return $this->hasMany(OrderProduct::class,'order_id','id');
    }
}
