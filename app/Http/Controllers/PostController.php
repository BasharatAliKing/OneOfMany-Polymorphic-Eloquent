<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      //  $post=Post::with('latestcomment')->find(2);
        $post=Post::with('oldestcomment')->get();
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post=Post::create([
            'title'=>'daffodils',
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, iusto.',
        ]);

        $post->comments()->create([
            'detail'=>'detail2. Suscipit dolore dolores vel?',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
