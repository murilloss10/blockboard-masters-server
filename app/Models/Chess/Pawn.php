<?php

namespace App\Models\Chess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pawn extends Piece
{
    use HasFactory;

    protected $name = 'pawn';
    protected $moves = [
        [0, 2],
        [0, 1],
        [1, 1],
        [-1, 1]
    ];
}
