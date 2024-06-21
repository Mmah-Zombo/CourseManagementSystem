<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Http\Request;

class Courses extends Component
{
    public function render()
    {
        return view('livewire.courses');
    }

    public function createCourse(Request $request) {
        $request->validate([
            'course_name' => 'required|string',
            'department' => 'required|string',
            'description' => 'required|string',
            'fee' => 'required|integer',
            'course_level' => 'required|string',
            'detail' => 'required|string',
        ]);

        // dd($request->course_level);
        Course::create([
            'course_name' => $request->course_name,
            'department' => $request->department,
            'description' => $request->description,
            'fee' => $request->fee,
            'course_level' => $request->course_level,
            'detail' => $request->detail,
        ]);

        return redirect('/courses');
    }
}
