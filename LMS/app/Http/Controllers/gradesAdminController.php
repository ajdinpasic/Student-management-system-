<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Grade;
use App\Models\Course;
use App\Mail\GradeEntered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class gradesAdminController extends Controller
{
    public function index()
    {
        $allStudents = User::select('id', 'name', 'email', 'created_at')->get();
        //dd(count($allStudents));
        for ($i = 0; $i < count($allStudents); $i++) {
            $user_id = $allStudents[$i]->id;
            $coursesForStudent = DB::select("SELECT DISTINCT name as name FROM courses");
            //dd($coursesForStudent);
            // $allStudents = User::select('name')->paginate(100);
            //return view('layouts.admin_grades', ["allCourses" => $allCourses, "allStudents" => $allStudents]);
        }
        //dd($coursesForStudent);
        return view('layouts.admin_users', ["allStudents" => $allStudents, "coursesForStudent" => $coursesForStudent]);
    } /*
    public function store(Request $request)
    {
        $request->validate([
            "course" => "required",
            "student" => "required",
            "grade" => "required|numeric|min:00.00|max:100.00",
            "title" => "required",

        ]);
        /*
        // get method for eloquent collection with arrays
        // without get method eloquent builder 
        $student = User::where('name', '=', $request->student)->get();
        $course = Course::where('name', '=', $request->course)->where('user_id', '=', $student[0]->id)->get();
        Course::where('id', '=', $course[0]->id)->where('user_id', '=', $student[0]->id)->update(["grade" => $request->grade]);

        Mail::to($student[0]->email)->send(new GradeEntered($student[0]->name, $course[0]->name));

        return redirect()->route('home'); 

        $student = User::where('name', '=', $request->student)->get();
        $course = Course::where('name', '=', $request->course)->where('user_id', '=', $student[0]->id)->get();

        Grade::create([
            'title' => $request->title . " from " . $request->course,
            'grade' => $request->grade,
            'user_id' => $student[0]->id,
            'course_id' => $course[0]->id,
        ]);
        return redirect()->route('home');
    } */
    /*
    public function formDelete()
    {
        $allStudents = User::select('name')->get();
        $allCourses = Course::select('name')->distinct()->get();
        $allCourses = Grade::select('grade')->distinct()->get();
        return view('layouts.deleteGrade', ["allStudents" => $allStudents, "allCourses" => $allCourses]);
    }

    public function showGrades(Request $request)
    {
        $student_id = User::select('id')->where('name', '=', $request->student)->first();
        $course_id = Course::select('id')->where('name', '=', $request->course)->where('user_id', '=', $student_id->id)->first();
        //dd($course_id);
        $grades = Grade::select('title', 'grade')->where('user_id', '=', $student_id)->where('course_id', '=', $course_id)->get();
        dd('ok');
        //return view('layouts.test', ["grades" => $grades]);
    } */
    /*
    public function deleteGrade(Request $request)
    {
        $request->validate([
            "course" => "required",
            "student" => "required",
            "grade" => "required",

        ]);
        dd('ogk');

        $course = Course::select('id')->where('name', '=', $request->course)->get();
        $student = User::select('id')->where('name', '=', $request->student)->get();
        $gradeToDelete = Grade::where('user_id', '=', $student[0]->id)->where('course_id', '=', $course[0]->id)->first();
        dd($gradeToDelete); // missing 
    } */

    public function store(Request $request)
    {
        $newGrade = $request->validate([
            "examination" => "required",
            "grade" => "required|numeric|min:00.00|max:100.00",
            "select" => "required",

        ]);
        $user = User::select('id')->where('name', '=', $request->hiddenValue)->first();
        $course = Course::select('id')->where('name', '=', $request->select)->where('user_id', '=', $user->id)->first();

        Grade::create([
            "title" => $request->examination,
            "grade" => $request->grade,
            "user_id" => $user->id,
            "course_id" => $course->id,
        ]);

        return redirect()->route('home');
    }
}
