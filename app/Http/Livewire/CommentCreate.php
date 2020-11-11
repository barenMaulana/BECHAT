<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentCreate extends Component
{

    public $comments;
    public $comments_id = 1;

    public function addComment()
    {
        Comment::create([
            'comments' => $this->comments,
            'comments_id' => $this->comments_id,
            'username' => Auth::user()->name,
        ]);

        $this->emit('commentAdded');

        $this->comments = "";
    }

    public function render()
    {
        return view('livewire.comment-create');
    }
}
