<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Article;
use Illuminate\Support\Facades\Auth;

class ArticleCreate extends Component
{
    public $title = '';
    public $body = '';
    public $articles_id = 1;
    public $like;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'title' => 'min:2|max:25'
        ], [
            'title.max' => 'Title terlalu panjang...',
            'title.min' => 'Title terlalu pendek...',
        ]);
    }

    public function addArticle()
    {
        $this->validate([
            'title' => 'required|max:25|min:5',
            'body' => 'required|min:30',
        ], [
            'title.required' => 'Judul article kamu masih kosong',
            'title.max' => 'Judulnya terlalu panjang...',
            'title.min' => 'Judulnya terlalu pendek...',
            'body.min' => 'artikel kamu terlalu pendek..'
        ]);

        Article::create([
            'articles_id' => $this->articles_id,
            'username' => Auth::user()->name,
            'title' => $this->title,
            'body' => $this->body,
        ]);

        $this->title = '';
        $this->body = '';

        return redirect()->to('article');
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
