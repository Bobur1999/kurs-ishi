<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $table = 'addresses';
    public $fillable = ['customer_id','region','city','street'];

    public function getOrder()
    {
        return $this->hasMany(Order::class,'address_id','id');
    }
}
