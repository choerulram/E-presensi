<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturer = Lecturer::all();
        return view('admin.lecturer', ['lecturerList' => $lecturer]);
    }

    public function create()
    {
        $course = Course::all();
        return view('admin.lecturer-add', ['course' => $course]);
    }

    public function store(Request $request)
    {
        // must assigment
        $lecturer = Lecturer::create($request->all());
        return redirect('/lecturer');
    }
}
