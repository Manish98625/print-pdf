<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class FrontController extends Controller
{
    public function index()
    {
        $card = Setting::first();

        return view('card.front', compact('card'));
    }
}
