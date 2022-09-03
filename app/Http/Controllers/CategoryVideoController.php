<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryVideoController extends Controller
{
    public function index(Category $category)
    {
        $videos = $category->videos()->paginate();

        # It only shows the previous and next page
//        $videos = $category->videos()->simplePaginate();

        # It only shows the previous and next page + Hashing the page number. It has a more optimal query
//        $videos = $category->videos()->cursorPaginate();

        $title = $category->name;
        return view('videos.index', compact('videos', 'title'));
    }
}
