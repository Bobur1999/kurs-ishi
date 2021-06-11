<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Customer extends Model
{
    use HasFactory;
    public $table = 'customers';
    public $fillable = ['user_id' ];

    public function getUser(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
