<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Student;

class Search extends Component
{

    public $search = "";

    public function render()
    {
        return view('livewire.search',[
            'students' => Student::where('name','LIKE','%'.$this->search.'%')->get(),
        ]);
    }
}
