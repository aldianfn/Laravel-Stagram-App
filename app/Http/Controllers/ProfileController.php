<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.profile', [
            'title' => auth()->user()->name . ' (@' . auth()->user()->username . ')',
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
            'user' => auth()->user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('main.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    public function getUser($username)
    {
        $userPost = User::latest()->where('username', $username)->first();

        if (!$userPost) {
            return view('error.notfound', [
                'title' => 'Not Found',
            ]);
        }

        return view('main.profile', [
            'title' => $userPost->name . " (@" . $userPost->username . ")",
            'posts' => $userPost->posts,
            'user' => $userPost
        ]);
    }

    public function getPost($username, $code)
    {
        $userPost = User::where('username', $username)->firstOrFail();
        $post = Post::where('code', $code)->firstOrFail();
        // dd($post->image);
        return view('main.show', [
            'title' => $userPost->name . ' on Stagram',
            'posts' => $post
        ]);
    }
}
