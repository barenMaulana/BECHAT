<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = [
        'name','job','email'
    ];

    protected $hidden = [

    ];

}
