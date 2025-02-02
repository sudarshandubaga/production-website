<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'home')->firstOrFail();

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

        $blogs = [
            [
                'image' => 'https://www.financialexpress.com/wp-content/uploads/2025/01/Sky-Force-movie-Poster.jpg?w=1024',
                'title' => 'What Is Meant By Lorem Ipsum In Website?',
                'date' => '2025-02-01',
                'description' => 'The word Lorem Ipsum is derived from the Latin word which means “pain itself”. It is a kind of a text filler tool that is used by the webmaster on the website. Basically, this tool is used to create dummy content on the website when it\'s new.'
            ],
            [
                'image' => 'https://www.hindustantimes.com/ht-img/img/2025/02/01/550x309/Ibrahim_Ali_Khan_Khushi_Kapoor_1738389507725_1738389533681.jpg',
                'title' => 'What Is Meant By Lorem Ipsum In Website?',
                'date' => '2025-02-01',
                'description' => 'The word Lorem Ipsum is derived from the Latin word which means “pain itself”. It is a kind of a text filler tool that is used by the webmaster on the website. Basically, this tool is used to create dummy content on the website when it\'s new.'
            ],
            [
                'image' => 'https://www.hindustantimes.com/ht-img/img/2025/01/26/550x309/sabya_1737880236839_1737880242183.jpg',
                'title' => 'What Is Meant By Lorem Ipsum In Website?',
                'date' => '2025-02-01',
                'description' => 'The word Lorem Ipsum is derived from the Latin word which means “pain itself”. It is a kind of a text filler tool that is used by the webmaster on the website. Basically, this tool is used to create dummy content on the website when it\'s new.'
            ],
            [
                'image' => 'https://www.hindustantimes.com/ht-img/img/2025/02/01/550x309/Screenshotttttt_1738407491765_1738407497722.png',
                'title' => 'What Is Meant By Lorem Ipsum In Website?',
                'date' => '2025-02-01',
                'description' => 'The word Lorem Ipsum is derived from the Latin word which means “pain itself”. It is a kind of a text filler tool that is used by the webmaster on the website. Basically, this tool is used to create dummy content on the website when it\'s new.'
            ],
        ];

        return view('web.screens.home', compact("videos", 'blogs', 'page'));
    }
}
