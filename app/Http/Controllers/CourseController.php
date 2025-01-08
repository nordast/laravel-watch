<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\View\View;

class CourseController extends Controller
{
    public function index(): View
    {
//        $courses = DB::select('select * from courses');
//        $courses = DB::table("courses")->get();

        $courses = Course::paginate(4);

        return view('pages.courses.index', compact('courses'));
    }

    public function show(Course $course): View
    {
//        $course = DB::selectOne('select * from courses where id = :id', compact('id'));
//        $course = DB::table('courses')->where('id', $id)->first();
//        $course = DB::table('courses')->find($id);
//        $course = Course::find($id);

        return view('pages.courses.show', compact('course'));
    }
}
