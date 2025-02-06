<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'home')->firstOrFail();

        $sliders = Slider::latest()->get();

        $videos = [
            "9SNLma8mcK8",
            "a3B2glol4IU",
            "GOkJguI8kYc",
            "nCD2hj6zJEc",
            "HexFqifusOk",
            "XgdY_s1LsZc",
            "h6qwhCDI3vQ",
            "VGPmFSB8qVY",
        ];

        $blogs = Blog::latest()->paginate(10);

        return view('web.screens.home', compact("videos", 'blogs', 'page', 'sliders'));
    }
}
