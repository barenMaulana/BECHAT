<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Gallery;
use Illuminate\Support\Facades\Auth;

class Likes extends Component
{
    public $post_id;
    public $likes;

    public function addLike($id)
    {
        $this->post_id = $id;
        $newLikes = Gallery::where('id', $this->post_id)->get();
        $this->likes = $newLikes->pluck('likes')[0];

        if ( Auth::user()->name == Auth::user()->name ) {
            $this->likes += 1;
        }

        Gallery::where('id',$this->post_id)->update([
            'likes' => $this->likes,
        ]);
    }

    public function render()
    {
        return view('livewire.likes',[
            'galleries' => Gallery::all()
        ]);
    }
}
