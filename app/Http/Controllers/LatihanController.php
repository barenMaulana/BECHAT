<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LatihanRequest;

class LatihanController extends Controller
{
    public function index()
    {
        return view('latihan');
    }

    public function store(LatihanRequest $request)
    {
        collect(array_filter($request->emails))->each(function($email){
            var_dump($email);
        });
        die();
    }
}
