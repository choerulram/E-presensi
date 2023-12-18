<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class, 'matkul_id');
    }

    public function getNameAttribute()
    {
        return $this->attributes['nama'];
    }
}
