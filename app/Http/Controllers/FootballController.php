<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Match;
use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function index()
    {
        // Tampilkan halaman utama dengan link ke menu-menu
        return view('welcome');
    }

    public function showClubForm()
    {
        // Tampilkan form input klub
        return view('input-club');
    }

    public function storeClub(Request $request)
    {
        // Validasi form
        $request->validate([
            'name' => 'required|unique:clubs',
            'city' => 'required',
        ]);

        // Simpan data klub
        Club::create([
            'name' => $request->name,
            'city' => $request->city,
        ]);

        return redirect()->back()->with('success', 'Data klub berhasil disimpan');
    }

    public function showScoreForm()
    {
        // Tampilkan form input skor
        $clubs = Club::all();
        return view('input-score', compact('clubs'));
    }

    public function storeScore(Request $request)
    {
        // Validasi form
        $request->validate([
            'home_team_id' => 'required|different:away_team_id',
            'away_team_id' => 'required',
            'home_team_score' => 'required|integer|min:0',
            'away_team_score' => 'required|integer|min:0',
        ]);

        // Logika untuk menghitung poin dan menyimpan data pertandingan
        // ...

        return redirect('/input-score')->with('success', 'Data skor berhasil disimpan');
    }

    public function showStandings()
    {
        // Tampilkan klasemen
        // ...

        return view('standings');
    }
}