<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomMatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'user_player_1',
        'user_player_2',
        'player_1_left_time_in_seconds',
        'player_2_left_time_in_seconds',
        'user_player_winner',
        'user_player_loser',
        'scoreboard',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
