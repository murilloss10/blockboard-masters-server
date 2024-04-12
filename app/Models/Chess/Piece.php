<?php

namespace App\Models\Chess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    protected $name;
    protected $moves = [];

    public function __construct() { }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMoves(): object
    {
        return (object) $this->moves;
    }

    public function setMoves(array $moves)
    {
        if ($$moves && count($moves) > 0) {
            foreach ($moves as $key => $move) {
                array_push($this->moves, $move);
            }
        }

        return (object) $this->moves;
    }
}
