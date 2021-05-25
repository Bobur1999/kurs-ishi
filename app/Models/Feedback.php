<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $table = 'feedbacks';
    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'subject',
        'message'
    ];
}
