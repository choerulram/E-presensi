<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use App\Models\Lecturer;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::all();
        return view('admin.class', ['classList' => $class]);
    }

    public function create(Request $request)
    {
        $lecturer = Lecturer::all();
        return view('admin.class-add', ['lecturer' => $lecturer]);
    }

    public function store(Request $request)
    {
        // must assigment
        $class = ClassRoom::create($request->all());
        return redirect('/class');
    }
}
