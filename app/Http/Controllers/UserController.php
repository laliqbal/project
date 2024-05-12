<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('pages.user.index', [
            'title' => 'Dashboard user'
        ]);
    }
}
