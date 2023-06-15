<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    function index() {
        $penghuni = Penghuni ::all();
        return view('dashboard', compact('penghuni'));
    }
}
