<?php

namespace App\Http\Controllers;

use App\Services\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * @var RoomService
     */
    private $roomService;

    public function __construct(RoomService $roomService) {
        $this->roomService = $roomService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = $this->roomService->listAllChessRooms();

        if (count($rooms) == 0)
            return \response()->json([
                'meta' => [
                    'status' => 400,
                    'message' => 'No rooms.'
                ]
            ]);

        return \response()->json([
            'meta' => [
                'status' => 200,
                'message' => 'Rooms are available.'
            ],
            'data' => $rooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $room = $this->roomService->createRoom($request);

        if (!$room)
            return \response()->json([
                'meta' => [
                    'status' => 400,
                    'message' => 'Room is not created.'
                ]
            ]);

        return \response()->json([
            'meta' => [
                'status' => 200,
                'message' => 'Rooms is created.'
            ],
            'data' => $room
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
