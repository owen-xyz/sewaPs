<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $penyewaans = Penyewaan::all();
        return view('home', compact('penyewaans'));  // Mengarahkan ke view 'home'
    }
}
