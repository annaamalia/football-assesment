<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Club;

class Matches extends Model
{
    protected $fillable = ['club_id_home', 'club_id_away', 'score_home', 'score_away'];

    public function homeClub()
    {
        return $this->belongsTo(Club::class, 'club_id_home');
    }

    public function awayClub()
    {
        return $this->belongsTo(Club::class, 'club_id_away');
    }
}
