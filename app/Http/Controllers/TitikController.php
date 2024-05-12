<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TitikModel;

class TitikController extends Controller
{
    protected $titikModel;
    public function __construct(TitikModel $titikModel)
    {
        $this->titikModel = $titikModel;
    }

    public function peta()
    {
        return view('pages.kepaladesa.peta.index');
        return view('pages.user.peta');
    }

    public function index()
    {
        return view('peta');
    }
    public function titik()
    {
        $results = $this->titikModel->allData();
        return json_encode($results);
    }
}
