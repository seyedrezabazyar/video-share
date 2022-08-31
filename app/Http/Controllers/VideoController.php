<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        dd($request->all());
    }
}
