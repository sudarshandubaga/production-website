<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Page;
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
        return view('web.screens.news', compact('page', 'blogs'));
    }

    private function about($page)
    {
        $members = [
            [
                'name' => 'John Doe',
                'position' => 'Chief Executive Officer (CEO)',
                'image' => 'https://randomuser.me/api/portraits/men/1.jpg',
                'description' => 'John is the CEO of the company with over 15 years of experience in technology and business management. He has successfully led multiple high-growth startups and has a strong background in strategic planning, operations, and leadership. His vision drives the company towards innovation and excellence in every aspect of business.'
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Chief Technology Officer (CTO)',
                'image' => 'https://randomuser.me/api/portraits/women/2.jpg',
                'description' => 'Jane is the CTO, leading the tech team with her expertise in software engineering and AI. With over a decade of experience in full-stack development and machine learning, she ensures that the company stays ahead in technological advancements while maintaining high standards of product quality and security.'
            ],
            [
                'name' => 'Robert Johnson',
                'position' => 'Chief Financial Officer (CFO)',
                'image' => 'https://randomuser.me/api/portraits/men/3.jpg',
                'description' => 'Robert is the CFO, handling all financial aspects of the company with precision and excellence. He has a vast background in financial strategy, risk management, and investment planning, ensuring financial stability and growth for the company through well-planned fiscal policies and resource allocation.'
            ],
            [
                'name' => 'Emily Davis',
                'position' => 'Head of Marketing',
                'image' => 'https://randomuser.me/api/portraits/women/4.jpg',
                'description' => 'Emily is the Head of Marketing, driving the company\'s branding and outreach strategies. With her extensive knowledge in digital marketing, social media, and consumer engagement, she plays a crucial role in shaping the company\'s presence in the market and ensuring strong customer relationships.'
            ],
            [
                'name' => 'Michael Brown',
                'position' => 'Chief Designer',
                'image' => 'https://randomuser.me/api/portraits/men/5.jpg',
                'description' => 'Michael is the Chief Designer, crafting innovative and user-friendly designs for all our projects. With a keen eye for detail and a passion for aesthetics, he ensures that the company\'s products and services deliver seamless user experiences and outstanding visual appeal.'
            ],
            [
                'name' => 'Sarah Wilson',
                'position' => 'Lead Developer',
                'image' => 'https://randomuser.me/api/portraits/women/6.jpg',
                'description' => 'Sarah is the Lead Developer, managing the software development lifecycle with expertise. She specializes in backend architecture, cloud computing, and application scalability, ensuring the company\'s technical infrastructure is robust, efficient, and future-ready.'
            ]
        ];
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
        $records = [
            [
                'title' => 'Rotoscopy',
                'before_image' => asset('images/vfx/01-before.png'),
                'after_image' => asset('images/vfx/01-after.png')
            ],
            [
                'title' => 'Compositing',
                'before_image' => asset('images/vfx/02-before.jpg'),
                'after_image' => asset('images/vfx/02-after.png')
            ],
            [
                'title' => 'Crowd Multiplication',
                'before_image' => asset('images/vfx/03-before.png'),
                'after_image' => asset('images/vfx/03-after.png')
            ],
            [
                'title' => 'Digital Matte Paints',
                'before_image' => asset('images/vfx/04-before.png'),
                'after_image' => asset('images/vfx/04-after.png')
            ],
            [
                'title' => 'De-Aging',
                'before_image' => asset('images/vfx/05-before.png'),
                'after_image' => asset('images/vfx/05-after.png')
            ],
            [
                'title' => 'Paint',
                'before_image' => asset('images/vfx/06-before.png'),
                'after_image' => asset('images/vfx/06-after.png')
            ],
        ];
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
        $faqs = [
            [
                'question' => 'What services do you offer?',
                'answer' => 'We offer a range of services including web development, mobile app development, UI/UX design, and digital marketing to help businesses grow online.'
            ],
            [
                'question' => 'How can I contact your support team?',
                'answer' => 'You can reach our support team via email at support@example.com or call us at +1 234 567 890. We are available Monday to Friday from 9 AM to 6 PM.'
            ],
            [
                'question' => 'Do you provide custom development services?',
                'answer' => 'Yes, we specialize in custom development tailored to your business needs. Contact us with your requirements, and we will provide a personalized solution.'
            ],
            [
                'question' => 'What is your project turnaround time?',
                'answer' => 'The project turnaround time depends on the complexity of the project. Typically, small projects take 2-4 weeks, while larger projects may take 2-6 months.'
            ],
            [
                'question' => 'Do you offer ongoing support and maintenance?',
                'answer' => 'Yes, we offer ongoing support and maintenance packages to ensure your website or application runs smoothly and remains up to date.'
            ]
        ];
        return view('web.screens.faq', compact('page', 'faqs'));
    }

    private function defaultPage($page)
    {
        return view('web.screens.page', compact('page'));
    }
}
