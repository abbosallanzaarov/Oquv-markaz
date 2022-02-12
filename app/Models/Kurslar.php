<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurslar extends Model
{

    protected $fillable=['kurs' , 'mentor'];
    use HasFactory;
}
