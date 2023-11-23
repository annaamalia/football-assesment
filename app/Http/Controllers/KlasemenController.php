<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class KlasemenController extends Controller
{
    public function index()
    {
        $clubs = Club::all();
        return view('klasemen', compact('clubs'));
    }
}
