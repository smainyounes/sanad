<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\ProgramReservation;

class ProgramReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|exists:programs,id',
            'note'       => 'nullable|string|max:500',
        ]);

        $program = Program::findOrFail($request->program_id);

        // Create reservation
        $reservation = ProgramReservation::create([
            'user_id'    => auth()->id(),
            'program_id' => $program->id,
            'note'       => $request->note,
            'status'     => 'pending',
        ]);

        return response()->json([
            'message' => 'تم إرسال طلب الحجز بنجاح!',
            'data'    => $reservation,
        ]);
    }

}
