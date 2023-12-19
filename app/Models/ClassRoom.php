<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    public $table = 'classes';

    public function getNameAttribute()
    {
        return $this->attributes['nama_kelas'];
    }

    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
        'dosen_id',
    ];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class, 'dosen_id');
    }
}
