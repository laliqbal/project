<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarUser extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.sidebar-user', [
            'menuss' => $this->menuss,
        ]);
    }
    protected $menuss;
    public function __construct()
    {
        $this->menuss = [
            [
                'name' => 'Dashboard',
                'icon' => '<i class="fa-solid fa-house"></i>',
                'url' => 'user.index',
                'slug' => 'dashboard'
            ],

            [
                'name' => 'Berita',
                'icon' => '<i class="fa-regular fa-newspaper"></i>',
                'url' => 'beritauser',
                'slug' => 'kelola-user'
            ],
            [
                'name' => 'Lapor',
                'icon' => '<i class="fa-solid fa-clipboard"></i>',
                'url' => 'laporw',
                'slug' => 'kelola-user'
            ],
            [
                'name' => 'Maps',
                'icon' => '<i class="ti-map-alt"></i>',
                'url' => 'peta',
                'slug' => 'maps'
            ],
            [
                'name' => 'Login',
                'icon' => '<i class="fa-solid fa-user"></i>',
                'url' => 'login',
                'slug' => 'kelola-user'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
}
