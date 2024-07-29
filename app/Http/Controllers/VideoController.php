<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $videos=Video::with('comments')->find(2);
        return $videos;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $video=Video::create([
            'title'=>'fistVideo',
            'url'=>'videos/video1.mp4',
        ]);
        $video->comments()->create([
            'detail'=>'dfd dfodg dg jdoi fdo df',
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
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
