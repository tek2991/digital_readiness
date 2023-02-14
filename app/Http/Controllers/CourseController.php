<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('dashboard');
        }

        $user = auth()->user();
        $all_lessons = Lesson::all();
        $user_lessons = auth()->user()->lessons;
        $diff_lessons = $all_lessons->diff($user_lessons);
        $user->lessons()->attach($diff_lessons);

        return view('course');
    }
}
