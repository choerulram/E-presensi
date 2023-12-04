<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class DosenAbsensiController extends Controller
{
    public function index()
    {
        $attendance = Attendance::all();
        return view('dosen.absensi');
    }
}
