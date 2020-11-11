<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\UserRequest;
use Illuminate\Auth\Middleware\Authenticate;
use App\User;
use App\Gallery;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
        $id = Auth::user()->id;
        $galleries = Gallery::where('users_id', $id)->get();
        $profiles = User::where('name', $user)->get();
        return view('pages.user.profile.index', [
            'profiles' => $profiles,
            'galleries' => $galleries
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data["image"] = $request->file("image")->store(
            'asset/gallery',
            'public'
        );
        User::create($data);
        return view()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profiles = User::findOrFail($id);
        return view('pages.user.profile.edit', [
            'profiles' => $profiles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->except(['_token', '_method']);

        if ($request->image != "") {
            $data["image"] = $request->file("image")->store(
                'asset/gallery',
                'public'
            );
            $profile = User::where('id', $id)->update($data);
            return redirect()->route('profile.index');
        } else {
            $profile = User::where('id', $id)->update($data);
            return redirect()->route('profile.index');
        }
        die;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
