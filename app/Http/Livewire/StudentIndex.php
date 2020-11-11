<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Student;

class StudentIndex extends Component
{
    public $post;
    public $search = '';

    protected $updatesQueryString = [
        'search' => ['except'=> ''] 
    ];
    protected $listeners = [
        'studentAdded',
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function studentAdded()
    {
        session()->flash('message', 'Yeay...ada murid baru..');
    }

    public function render()
    {
        return view('livewire.student-index',  [
            'students' => Student::where('name','LIKE','%'.$this->search.'%')->get(),
        ]);
    }
}
