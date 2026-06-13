<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Facades\Cache;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::available()->orderBy('sort_order')->paginate(9);

        return view('rooms.index', compact('rooms'));
    }

    public function show($slug)
    {
        $room = Room::where('slug', $slug)->available()->with('galleries')->firstOrFail();

        $otherRooms = Cache::remember('other_rooms_'.$room->id, 3600, function () use ($room) {
            return Room::where('id', '!=', $room->id)->available()->take(3)->get();
        });

        return view('rooms.show', compact('room', 'otherRooms'));
    }
}
