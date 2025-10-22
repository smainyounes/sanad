<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SpecialistReservation;

class SpecialistReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'specialist_id' => 'required|exists:users,id',
            'date'          => 'required|date|after_or_equal:today',
            'time'          => 'required|date_format:H:i',
            'note'          => 'nullable|string|max:500',
        ]);

        // Ensure the selected user is actually a specialist
        $specialist = User::where('id', $request->specialist_id)
                        ->where('type', 'specialist')
                        ->firstOrFail();

        $reservation = SpecialistReservation::create([
            'user_id'       => auth()->id(),
            'specialist_id' => $specialist->id,
            'date'          => $request->date,
            'time'          => $request->time,
            'note'          => $request->note,
            'status'        => 'pending',
        ]);

        return response()->json(['message' => 'Reservation created successfully', 'data' => $reservation]);
    }

}
