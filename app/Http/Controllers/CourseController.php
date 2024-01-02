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

    public function edit(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        // $class = ClassRoom::where('id', '!=', $course->class_id)->get(['id', 'nama_kelas']);
        return view('admin.course-edit', ['course' => $course]);
    }

    // public function update(Request $request, $id)
    // {
    //     $course = Course::findOrFail($id);
    //     $course->update($request->all());
    //     return redirect('/course');
    // }
}
