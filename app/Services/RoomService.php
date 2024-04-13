<?php

namespace App\Services;

use App\Models\Room;
use App\Models\RoomMatch;
use Exception;
use Illuminate\Http\Request;

class RoomService
{
    /**
     * @var Room
     */
    protected $room;

    /**
     * @var RoomMatch
     */
    protected $roomMatch;

    public function __construct(Room $room, RoomMatch $roomMatch) {
        $this->room = $room;
        $this->roomMatch = $roomMatch;
    }

    public function listAllChessRooms()
    {
        return $this->room
            ->where([
                ['game_name', 'chess']
            ])
            // ->with(['matches' => function ($query) {
            //     return $query->where('user_player_2', null);
            // }])
            ->get();
    }

    public function createRoom(Request $request)
    {
        try {
            $data = $request->all();
            $room = $this->room->create($request->all());
            
            return $room;
        } catch (Exception $e) {
            return [];
        }
    }
}

