<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda() {
        $beranda = Beranda::first();

        return view('dashboard', compact('beranda'));
    }
}
