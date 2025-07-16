<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Course;
use Livewire\Component;

class Card extends Component
{
    public $numbers;
    public $content;
    public $students;
    public $num;
    public function render()
    {
        $this->students = User::where(function ($query) {
            $query->whereNull('admin')->orWhere('admin', 0);
        })->count();
        $this->numbers = Course::count();
        return view('livewire.card', ['$students' => $this->students]);
    }
}
