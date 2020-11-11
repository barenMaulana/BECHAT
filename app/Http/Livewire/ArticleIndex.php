<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class ArticleIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.article-index', [
            'articles' => Article::latest()->paginate(3)
        ]);
    }
}
