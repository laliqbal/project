<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('pages.admin.dashboard', [
            'title' => 'Dashboard Admin'
        ]);
    }
}
