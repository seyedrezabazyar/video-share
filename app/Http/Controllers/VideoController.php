<?php

namespace App\Http\Controllers;

class VideoController extends Controller{
    public function index()
    {
        $videos = ['A','B','C','D'];
        return view('videos', [
            'videos' => $videos,
            'is_admin' => true
        ]);
    }

    public function best()
    {
        echo "hello from best controller";
    }
}
