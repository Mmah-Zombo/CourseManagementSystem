<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Students extends Component
{
    public function render()
    {
        $students = User::where(function ($query) {
            $query->whereNull('admin')->orWhere('admin', 0);
        })->get();
        return view('livewire.students', ['students' => $students]);
    }
}
