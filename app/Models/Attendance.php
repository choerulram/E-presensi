<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'nama',
        'email',
        'no_hp',
        'class_id',
        'alamat',
    ];

    // public function attendance()
    // {
    //     return $this->belongsTo(Student::attendance, 'class_id');
    // }
}
