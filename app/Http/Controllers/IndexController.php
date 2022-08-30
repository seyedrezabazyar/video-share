<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->take(6)->get();
        $mostPopularVideos = Video::all()->random(6);
        $mostViewedVideos = Video::all()->random(6);

        # The first method
//        return view('index',[
//            'videos' => $videos,
//            'mostPopularVideos' => $mostPopularVideos,
//            'mostViewedVideos' =>$mostViewedVideos
//        ]);

        # The first method (This method is better)
        return view('index', compact('videos', 'mostPopularVideos', 'mostViewedVideos'));
    }
}
