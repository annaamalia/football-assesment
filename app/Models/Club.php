<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = ['name', 'city', 'matches_played', 'wins', 'draws', 'losses', 'goals_for', 'goals_against', 'points'];

    public function win()
    {
        $this->matches_played++;
        $this->wins++;
        $this->points += 3;
        $this->goals_for += $matches->score_home;
        $this->goals_against += $matches->score_away;
        $this->save();
    }

    public function draw()
    {
        $this->matches_played++;
        $this->draws++;
        $this->points += 1;
        $this->goals_for += $matches->score_home;
        $this->goals_against += $matches->score_away;
        $this->save();
    }

    public function lose()
    {
        $this->matches_played++;
        $this->losses++;
        $this->goals_for += $matches->score_home;
        $this->goals_against += $matches->score_away;
        $this->save();
    }
}
