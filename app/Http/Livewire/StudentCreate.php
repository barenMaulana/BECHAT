<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Student;

class StudentCreate extends Component
{
    public $name;
    
    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'min:3|max:20',
        ],[
            'name.min' => 'Nama tidak boleh kurang dari 3 huruf',
            'name.max' => 'Nama tidak boleh lebih dari 20 huruf',
        ]);
    }

    public function addStudent()
    {
        $this->validate([
            'name' => 'required|min:3|max:20',
        ],[
            'name.required' => 'Kami butuh sebuah nama',
            'name.min' => 'Nama tidak boleh kurang dari 3 huruf',
            'name.max' => 'Nama tidak boleh lebih dari 20 huruf',
        ]);

        Student::create(['name' => $this->name]);

        $this->emit('studentAdded');

        $this->name = "";
    }

    public function render()
    {
        return view('livewire.student-create');
    }
}
