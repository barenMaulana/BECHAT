<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;

class CommentIndex extends Component
{
    public $nomor = 10;
    public $baa;

    public function show()
    {
        $this->baa = 'baa';
    }

    public function hitung()
    {
        if ($this->nomor == 0) {
            session()->flash('pesan', 'Waktu kamu habis, pulang terus cuci kaki!');
            $nomor = 0;
        }else{
            $this->nomor--;
        }
    }

    protected $listeners = [
        'commentAdded'
    ];

    public function commentAdded()
    {
        #code...
    }

    public function render()
    {
        return view('livewire.comment-index',[
            'comments' => Comment::all()
        ]);
    }
}
