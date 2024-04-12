<?php

namespace App\Models\Chess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class King extends Piece
{
    use HasFactory;
    
    protected $name = 'king';
    protected $moves = [
        [1, 0],
        [-1, 0],
        [0, 1],
        [0, -1],
        [1, 1],
        [-1, 1],
        [1, -1],
        [-1, -1],
    ];
}
