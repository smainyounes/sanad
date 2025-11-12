<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramReservation;
use Illuminate\Support\Facades\Auth;
use App\Models\SpecialistReservation;

class ClientReservationController extends Controller
{
    public function index()
    {
        $user = auth()->user();
    
        if ($user->type === 'specialist') {
            $programReservations = ProgramReservation::with(['user', 'program.specialist'])
                ->whereHas('program', fn($q) => $q->where('specialist_id', $user->id))
                ->latest()->get();
    
            $specialistReservations = SpecialistReservation::with(['user', 'specialist'])
                ->where('specialist_id', $user->id)
                ->latest()->get();
        } else {
            $programReservations = ProgramReservation::with(['program.specialist'])
                ->where('user_id', $user->id)
                ->latest()->get();
    
            $specialistReservations = SpecialistReservation::with(['specialist'])
                ->where('user_id', $user->id)
                ->latest()->get();
        }
    
        return view('client_new.reservations.index', compact('programReservations', 'specialistReservations'));
    }
    
    public function updateStatusSpec(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:specialist_reservations,id',
            'status' => 'required|string|in:pending,confirmed,cancelled'
        ]);
    
        $reservation = SpecialistReservation::findOrFail($request->id);
        $user = auth()->user();
    
        if ($user->type === 'specialist' && $reservation->specialist_id !== $user->id)
            return response()->json(['success' => false, 'message' => 'غير مصرح لك.']);
    
        if ($user->type !== 'specialist' && $reservation->user_id !== $user->id)
            return response()->json(['success' => false, 'message' => 'غير مصرح لك.']);
    
        $reservation->update(['status' => $request->status]);
    
        return response()->json(['success' => true, 'message' => 'تم تحديث حالة الحجز بنجاح.']);
    
    }

    public function updateStatusProgram(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:program_reservations,id',
            'status' => 'required|string|in:pending,confirmed,cancelled'
        ]);
    
        $reservation = ProgramReservation::with('program')->findOrFail($request->id);
        $user = auth()->user();
    
        if ($user->type === 'specialist' && $reservation->program->specialist_id !== $user->id)
            return response()->json(['success' => false, 'message' => 'غير مصرح لك.']);
    
        if ($user->type !== 'specialist' && $reservation->user_id !== $user->id)
            return response()->json(['success' => false, 'message' => 'غير مصرح لك.']);
    
        $reservation->update(['status' => $request->status]);
    
        return response()->json(['success' => true, 'message' => 'تم تحديث حالة الحجز بنجاح.']);
    
    }
}
