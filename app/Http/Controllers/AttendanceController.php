<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = Attendance::all();
        return view('dosen.attendance', ['attendanceList' => $attendance]);
    }
}
