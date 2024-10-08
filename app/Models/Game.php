<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'lotery_id',
        'game_date',
        'status',
        'total_prize',
        'winner_id',
    ];

    public function lotery()
    {
        return $this->belongsTo(Lotery::class);
    }

    public function winner()
    {
        return $this->belongsTo(User::class);
    }
}
