<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return view('admin.course', ['courseList' => $course]);
    }
}
