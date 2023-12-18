<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return view('admin.course', ['courseList' => $course]);
    }

    public function create()
    {
        $course = Course::all();
        return view('admin.course-add', ['course' => $course]);
    }

    public function store(Request $request)
    {
        // must assigment
        $course = Course::create($request->all());
        return redirect('/course');
    }
}
