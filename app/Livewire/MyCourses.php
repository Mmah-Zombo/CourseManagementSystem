<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Enrollment;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MyCourses extends Component
{
    public function render()
    {
        $this_id = Auth::id();
        $myEnrollments = Enrollment::where('user_id', '=', Auth::id())->get();
        $myCourses = Course::whereIn('id', $myEnrollments->pluck('course_id'))->get();
        return view('livewire.my-courses', ['myCourses' => $myCourses]);
    }
}
