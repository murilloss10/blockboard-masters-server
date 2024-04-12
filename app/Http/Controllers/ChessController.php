<?php

namespace App\Http\Controllers;

use App\Models\Chess\Bishop;
use App\Models\Chess\Tower;
use App\Models\Chess\Pawn;
use App\Models\Chess\Queen;
use Illuminate\Http\Request;

class ChessController extends Controller
{
    public function index()
    {
        $pawn   = new Pawn();
        $tower  = new Tower();
        $bishop = new Bishop();
        $queen = new Queen();

        return response()->json([
            'pawn' => $pawn->getMoves(),
            'tower' => $tower->getMoves(),
            'bishop' => $bishop->getMoves(),
            'queen' => $queen->getMoves(),
        ]);
    }
}
