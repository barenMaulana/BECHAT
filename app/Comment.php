<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comments_id','comments','username'
    ];

    protected $hidden = [
        // 
    ];

    public function gallery()
    {
        return $this->hasMany( Gallery::class, 'id', 'users_id' );
    }
}
