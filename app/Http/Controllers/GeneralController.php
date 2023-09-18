<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        $data = Info::where('id', 1)->first();

        return \view('index', compact('data'));
    }
}
