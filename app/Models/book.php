<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public $table = 'book';
    
    public $fillable = ['nom', 'img', 'avtor', 'avtor_id', 'tur', 'tur_id', 'qisqacha', 'narx', 'nashriyot', 'nashriyot_id', 'til', 'til_id', 'varaqsoni', 'yili', 'views'];
}
