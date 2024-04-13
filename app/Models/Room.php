<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'game_name',
        'time_in_seconds',
        'room_type',
        'bet_value',
        'hash'
    ];

    public function matches()
    {
        return $this->hasOne(RoomMatch::class, 'room_id');
    }
}
