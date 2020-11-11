<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class StudentSingle extends Component
{
    public $like;
    public $student;

    public function addLike()
    {
        if(!$this->like == Auth::user()->name)
        {
            $this->like += 1;
        }
        else
        {
            $this->like -= 1;
        }

        
    }

    public function mount($student)
    {
        $this->fill(['student' => $student]);
    } 
    
    public function render()
    {
        return view('livewire.student-single');
    }
}
