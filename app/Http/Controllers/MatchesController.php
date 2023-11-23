<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matches;
use App\Models\Club;

class MatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matches = Matches::all();
        return view('matches.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clubs = Club::all();
        return view('matches.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'club_id_home' => 'required',
            'club_id_away' => 'required|different:club_id_home',
            'score_home' => 'required|integer',
            'score_away' => 'required|integer',
        ]);

        // Logika untuk menentukan pemenang dan update klasemen
        $homeClub = Club::find($request->club_id_home);
        $awayClub = Club::find($request->club_id_away);

        // Logika perhitungan poin dan update klasemen

        $matches = new Matches;
        if ($matches->score_home > $matches->score_away) {
            $homeClub->win();
            $awayClub->lose();
        } elseif ($matches->score_home < $matches->score_away) {
            $homeClub->lose();
            $awayClub->win();
        } else {
            $homeClub->draw();
            $awayClub->draw();
        }
        // $matches->club_id_home = $validatedData['club_id_home'];
        // $matches->club_id_away = $validatedData['club_id_away'];
        // $matches->score_home = $validatedData['score_home'];
        // $matches->score_away = $validatedData['score_away'];

        $matches->save();

        return redirect()->route('matches.index')->with('success', 'Score created successfully.');    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
