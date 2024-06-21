<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;
use Illuminate\Http\Request;

class Courses extends Component
{
    public $allCourses;

    public function render()
    {
        $this->allCourses = Course::orderBy('created_at', 'desc')->get();
        return view('livewire.courses', [ 'allCourses' => $this->allCourses]);
    }

    public function createCourse(Request $request) {
        $request->validate([
            'course_name' => 'required|string',
            'department' => 'required|string',
            'description' => 'required|string|max:255',
            'fee' => 'required|integer',
            'course_level' => 'required|string',
            'detail' => 'required|string|max:5000',
        ]);

        // dd($request);
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

    public function deleteCourse(Request $request, $course_id) {
        Course::find($course_id)->delete();
        $this->allCourses = Course::orderBy('created_at', 'desc')->get();

        return redirect('/courses');
    }

}
