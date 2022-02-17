<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class person extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function kurs(){
        return $this->belongsTo(Kurslar::class , 'kurs' );
    }
}
