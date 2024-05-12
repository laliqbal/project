<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapor;

class LaporController extends Controller
{
    public function index()
    {
        $data = Lapor::all();
        return view('pages.kepaladesa.reports.komfirmasi', compact('data'));
    }

    public function laporw()
    {
        return view('pages.user.lapor');
    }

    public function store(Request $request)
    {
        lapor::create($request->all());
        return redirect('/lapor');
    }
}
