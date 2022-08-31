<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller{
    public function index()
    {
        $videos = Video::all();
        return $videos;
    }

    public function create()
    {
        return view('videos.create');
    }
}
