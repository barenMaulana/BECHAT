<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        return view('pages.comment.index',[
            'id' => $id
        ]);
    }
}
