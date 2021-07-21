<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class coursesController extends Controller
{
    public function index(Request $request)
    {
        //$courses = Course::where("department", "=", "IT")->paginate(10);
        $courses = $request->user()->course()->select('name', 'ects')->paginate(10);
        return view('layouts.courses', ["courses" => $courses]);
    }
}
