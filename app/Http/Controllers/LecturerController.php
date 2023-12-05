<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturer = Lecturer::all();
        return view('admin.lecturer', ['lecturerList' => $lecturer]);
    }
}
