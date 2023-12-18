<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function getNameAttribute()
    {
        return $this->attributes['nim'];
    }

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'no_hp',
        'class_id',
        'alamat',
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id');
    }
}
