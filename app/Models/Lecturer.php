<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    public function getNameAttribute()
    {
        return $this->attributes['nama'];
    }

    protected $fillable = [
        'nidn',
        'nama',
        'email',
        'no_hp',
        'alamat',
        'matkul_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'matkul_id');
    }
}

