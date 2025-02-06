<?php

namespace Database\Seeders;

use App\Models\AdminMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenuSeeder extends Seeder
{

    protected $data = [];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminMenu::whereRaw('1=1')->delete();

        $table = 'admin_menus';
        $statement = "ALTER TABLE $table AUTO_INCREMENT = 1";
        DB::unprepared($statement);

        $this->addRow([
            'label' => 'Dashboard',
            'icon'  => 'bx bxs-dashboard',
            'route_name' => 'admin.dashboard',
        ]);

        $this->addRow([
            'label' => 'Slider',
            'icon'  => 'bx bxs-carousel',
            'route_name' => 'admin.slider.index',
        ]);

        $this->addRow([
            'label' => 'Pages',
            'icon'  => 'bx bx-notepad',
            'route_name' => 'admin.page.index'
        ]);

        $this->addRow([
            'label' => 'FAQ',
            'icon'  => 'bx bx-question-mark',
        ]);

        $this->addRow([
            'label' => 'Create New FAQ',
            'route_name' => 'admin.faq.create',
        ], true);

        $this->addRow([
            'label' => 'View FAQs',
            'route_name' => 'admin.faq.index',
        ], true);

        $this->addRow([
            'label' => 'Blog',
            'icon'  => 'bx bx-pin',
        ]);

        $this->addRow([
            'label' => 'Create New Blog',
            'route_name' => 'admin.blog.create',
        ], true);

        $this->addRow([
            'label' => 'View Blogs',
            'route_name' => 'admin.blog.index',
        ], true);

        $this->addRow([
            'label' => 'Team',
            'icon'  => 'bx bx-group',
        ]);

        $this->addRow([
            'label' => 'Create New Team',
            'route_name' => 'admin.team.create',
        ], true);

        $this->addRow([
            'label' => 'View Teams',
            'route_name' => 'admin.team.index',
        ], true);

        $this->addRow([
            'label' => 'Movie / Television',
            'icon'  => 'bx bx-movie-play',
        ]);

        $this->addRow([
            'label' => 'Create New Movie / Television',
            'route_name' => 'admin.movie.create',
        ], true);

        $this->addRow([
            'label' => 'View Movies / Televisions',
            'route_name' => 'admin.movie.index',
        ], true);

        $this->addRow([
            'label' => 'VFX',
            'icon'  => 'bx bx-laptop',
        ]);

        $this->addRow([
            'label' => 'Create New VFX',
            'route_name' => 'admin.vfx.create',
        ], true);

        $this->addRow([
            'label' => 'View VFXs',
            'route_name' => 'admin.vfx.index',
        ], true);

        $this->addRow([
            'label' => 'Studio',
            'icon'  => 'bx bxs-microphone-alt',
        ]);

        $this->addRow([
            'label' => 'Studio Category',
            'route_name' => 'admin.studio-category.index',
        ], true);

        $this->addRow([
            'label' => 'Create New Studio',
            'route_name' => 'admin.studio.create',
        ], true);

        $this->addRow([
            'label' => 'View Studios',
            'route_name' => 'admin.studio.index',
        ], true);

        $this->addRow([
            'label' => 'Syndication',
            'icon'  => 'bx bx-pin',
        ]);

        $this->addRow([
            'label' => 'Create New Syndication',
            'route_name' => 'admin.syndication.create',
        ], true);

        $this->addRow([
            'label' => 'View Syndications',
            'route_name' => 'admin.syndication.index',
        ], true);

        $this->addRow([
            'label' => 'Work Video',
            'icon'  => 'bx bxs-video',
        ]);

        $this->addRow([
            'label' => 'Create New Work Video',
            'route_name' => 'admin.work-video.create',
        ], true);

        $this->addRow([
            'label' => 'View Work Videos',
            'route_name' => 'admin.work-video.index',
        ], true);

        $this->addRow([
            'label' => 'Enquiry',
            'icon'  => 'bx bx-phone',
            'route_name' => 'admin.enquiry.index',
        ]);

        AdminMenu::insert($this->data);
    }

    protected function addRow($data, $hasParent = false)
    {
        $data['id'] = count($this->data) + 1;
        $data['admin_menu_id'] = $hasParent ? $this->getParent() : null;
        if (empty($data['icon'])) {
            $data['icon'] = null;
        }
        if (empty($data['route_name'])) {
            $data['route_name'] = null;
        }
        if (empty($data['params'])) {
            $data['params'] = [];
        }
        $data['params'] = json_encode($data['params']);
        $this->data[] = $data;
    }

    protected function getParent()
    {
        $parents = array_filter($this->data, function ($data) {
            return empty($data['admin_menu_id']);
        });

        $parents = array_values($parents);

        $lastParent = end($parents);

        return !empty($lastParent) ? $lastParent['id'] : null;
    }
}
