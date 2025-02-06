<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Team;
use App\Models\Vfx;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Page $page)
    {
        $pageName = $page->template ?? 'page';

        switch ($pageName) {
            case 'news':
                return $this->news($page);

            case 'about':
                return $this->about($page);

            case 'contact':
                return $this->contact($page);

            case 'television':
                return $this->television($page);

            case 'vfx':
                return $this->vfx($page);

            case 'studio':
                return $this->studio($page);

            case 'syndication':
                return $this->syndication($page);

            case 'faq':
                return $this->faq($page);

            default:
                return $this->defaultPage($page);
        }
    }

    private function news($page)
    {
        $blogs = Blog::latest()->paginate(15);
        return view('web.screens.news', compact('page', 'blogs'));
    }

    private function about($page)
    {
        $members = Team::get();
        return view('web.screens.about', compact('page', 'members'));
    }

    private function contact($page)
    {
        return view('web.screens.contact', compact('page'));
    }

    private function television($page)
    {
        return view('web.screens.television', compact('page'));
    }

    private function vfx($page)
    {
        $records = Vfx::latest()->paginate(10);
        return view('web.screens.vfx', compact('page', 'records'));
    }

    private function studio($page)
    {
        $stages = [
            [
                'title' => 'Porus',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsMPrdWJ_2k269QfdgVW4iuhv9evR3gH0mdA&s'
            ],
            [
                'title' => 'Chandragupta Maurya',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNLVxFS5B7V6EmC2SASJMhI1ylaNfJZ2t99A&s'
            ],
            [
                'title' => 'Devi',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1gSKvMNklemq5-FMo9ytUuZtmQGm7skv8g&s'
            ],
            [
                'title' => 'Porus',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsMPrdWJ_2k269QfdgVW4iuhv9evR3gH0mdA&s'
            ],
            [
                'title' => 'Chandragupta Maurya',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNLVxFS5B7V6EmC2SASJMhI1ylaNfJZ2t99A&s'
            ],
            [
                'title' => 'Devi',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1gSKvMNklemq5-FMo9ytUuZtmQGm7skv8g&s'
            ],
            [
                'title' => 'Porus',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsMPrdWJ_2k269QfdgVW4iuhv9evR3gH0mdA&s'
            ],
            [
                'title' => 'Chandragupta Maurya',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNLVxFS5B7V6EmC2SASJMhI1ylaNfJZ2t99A&s'
            ],
        ];
        return view('web.screens.studio', compact('page', 'stages'));
    }

    private function syndication($page)
    {
        $syndications = [
            [
                'title' => 'Porus',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsMPrdWJ_2k269QfdgVW4iuhv9evR3gH0mdA&s'
            ],
            [
                'title' => 'Chandragupta Maurya',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNLVxFS5B7V6EmC2SASJMhI1ylaNfJZ2t99A&s'
            ],
            [
                'title' => 'Devi',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1gSKvMNklemq5-FMo9ytUuZtmQGm7skv8g&s'
            ],
            [
                'title' => 'Porus',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsMPrdWJ_2k269QfdgVW4iuhv9evR3gH0mdA&s'
            ],
            [
                'title' => 'Chandragupta Maurya',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNLVxFS5B7V6EmC2SASJMhI1ylaNfJZ2t99A&s'
            ],
            [
                'title' => 'Devi',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1gSKvMNklemq5-FMo9ytUuZtmQGm7skv8g&s'
            ],
            [
                'title' => 'Porus',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsMPrdWJ_2k269QfdgVW4iuhv9evR3gH0mdA&s'
            ],
            [
                'title' => 'Chandragupta Maurya',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNLVxFS5B7V6EmC2SASJMhI1ylaNfJZ2t99A&s'
            ],
            [
                'title' => 'Devi',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1gSKvMNklemq5-FMo9ytUuZtmQGm7skv8g&s'
            ],
            [
                'title' => 'Porus',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsMPrdWJ_2k269QfdgVW4iuhv9evR3gH0mdA&s'
            ],
            [
                'title' => 'Chandragupta Maurya',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNLVxFS5B7V6EmC2SASJMhI1ylaNfJZ2t99A&s'
            ],
            [
                'title' => 'Devi',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP1gSKvMNklemq5-FMo9ytUuZtmQGm7skv8g&s'
            ],
        ];
        return view('web.screens.syndication', compact('page', 'syndications'));
    }

    private function faq($page)
    {
        $faqs = Faq::latest()->get();
        return view('web.screens.faq', compact('page', 'faqs'));
    }

    private function defaultPage($page)
    {
        return view('web.screens.page', compact('page'));
    }
}
