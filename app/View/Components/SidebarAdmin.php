<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarAdmin extends Component
{

    protected $menus;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->menus = [
            [
                'name' => 'Dashboard',
                'icon' => '<i class="fa-solid fa-house"></i>',
                'url' => 'admin.index',
                'slug' => 'dashboard'
            ],
            [
                'name' => 'Maps',
                'icon' => '<i class="ti-map-alt"></i>',
                'url' => 'petas',
                'slug' => 'maps'
            ],
            [
                'name' => 'Kelola User',
                'icon' => '<i class="fa-solid fa-user"></i>',
                'url' => 'user.index',
                'slug' => 'kelola-user'
            ],
            [
                'name' => 'Kelola Berita',
                'icon' => '<i class="fa-regular fa-newspaper"></i>',
                'url' => 'berita.index',
                'slug' => 'kelola-user'
            ],
            [
                'name' => 'Kelola Lapor',
                'icon' => '<i class="fa-solid fa-clipboard"></i>',
                'url' => 'lapor',
                'slug' => 'kelola-user'
            ],
            [
                'name' => 'Page pengguna',
                'icon' => '<i class="fa-solid fa-house"></i>',
                'url' => 'home.index',
                'slug' => 'kelola-user'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.partials.sidebar-admin', [
            'menus' => $this->menus,
        ]);
    }
}
