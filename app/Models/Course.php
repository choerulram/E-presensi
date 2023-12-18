<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function getNameAttribute()
    {
        return $this->attributes['nama_matkul'];
    }

    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'semester',
        'sks',
    ];
}
