<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseInfo extends Component
{
    public function render($course_id)
    {
        $this_course = Course::where('id', '=', $course_id)->first();
        return view('livewire.course-info', ['this_course' => $this_course]);
    }

}
