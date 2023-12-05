<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('admin.student', ['studentList' => $student]);
    }

    public function create()
    {
        $class = ClassRoom::all();
        return view('admin.student-add', ['class' => $class]);
    }

    public function store(Request $request)
    {
        // must assigment
        $student = Student::create($request->all());
        return redirect('/student');
    }

    public function edit(Request $request, $id)
    {
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id', 'nama_kelas']);
        return view('admin.student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('/student');
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student-delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();

        if($deletedStudent) {
            Session::flash('status', 'succes');
            Session::flash('message', 'delete student success!');
        }

        return redirect('/student');
    }
}
