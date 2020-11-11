<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
    protected $fillable = [
        'username','articles_id','title','body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'articles_id', 'id');
    }
}
