<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Teachers extends Component
{
    public function render()
    {
        $teachers = User::where('admin', '=', 1)->get();
        return view('livewire.teachers', ['teachers' => $teachers]);
    }
}
