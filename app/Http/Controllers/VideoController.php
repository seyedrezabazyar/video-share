<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller{
    public function index()
    {
//        $videos = Video::find(1);
//        dd($videos);
        $videos = Video::all();
        return $videos;

    }

    public function best()
    {
        echo "hello from best controller";
    }
}
