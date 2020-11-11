<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'users_id','image','deskripsi','title','likes'
    ];

    protected $hidden = [
        // 
    ];

    
    public function users()
    {
        return $this->belongsTo( User::class, 'users_id', 'id' );
    }
}
