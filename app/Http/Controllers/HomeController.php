<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $galleries = Gallery::with(['users'])->get();
        return view('pages.home',[
            'galleries' => $galleries
        ]);
    }
}
