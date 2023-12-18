<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendance = Attendance::all();
        return view('dosen.attendance', ['attendanceList' => $attendance]);
    }

    public function create()
    {
        $attendance = Student::all();
        return view('dosen.attendance-add', ['attendance' => $attendance]);
    }

    public function store(Request $request)
    {
        // must assigment
        $attendance = Attendance::create($request->all());
        // return redirect('/attendance');
    }

    public function edit(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        // $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id', 'nama_kelas']);
        return view('dosen.attendance-edit', ['attendance' => $attendance]);
    }

    // public function update(Request $request, $id)
    // {
    //     $attendance = attendance::findOrFail($id);
    //     $attendance->update($request->all());
    //     return redirect('/attendance');
    // }
}
