<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProgramReservation;
use App\Http\Controllers\Controller;
use App\Models\SpecialistReservation;

class AdminReservationController extends Controller
{
    public function index()
    {
        return view('admin.reservations.index');
    }

    // 🩺 Specialist Reservations
    public function getSpecialistReservations(Request $request)
    {
        $query = SpecialistReservation::with(['user', 'specialist'])
            ->orderByDesc('created_at');

        if ($search = $request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->whereHas('user', fn($u) => $u->where('name', 'like', "%$search%"))
                  ->orWhereHas('specialist', fn($s) => $s->where('name', 'like', "%$search%"));
            });
        }

        return response()->json($query->paginate(10));
    }

    // 📚 Program Reservations
    public function getProgramReservations(Request $request)
    {
        $query = ProgramReservation::with(['user', 'program'])
            ->orderByDesc('created_at');

        if ($search = $request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->whereHas('user', fn($u) => $u->where('name', 'like', "%$search%"))
                  ->orWhereHas('program', fn($p) => $p->where('title', 'like', "%$search%"));
            });
        }

        return response()->json($query->paginate(10));
    }

    // 🧠 Specialist reservation edit
    public function editSpecialist($id)
    {
        $reservation = SpecialistReservation::with(['user', 'specialist'])->findOrFail($id);
        return view('admin.reservations.edit-specialist', compact('reservation'));
    }

    public function updateSpecialist(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|string',
            'status' => 'required|string',
            'note' => 'nullable|string',
        ]);

        $reservation = SpecialistReservation::findOrFail($id);
        $reservation->update($request->only('date', 'time', 'status', 'note'));

        return response()->json(['success' => true, 'message' => 'تم تحديث الحجز بنجاح.']);
    }

    // 📅 Program reservation edit
    public function editProgram($id)
    {
        $reservation = ProgramReservation::with(['user', 'program'])->findOrFail($id);
        return view('admin.reservations.edit-program', compact('reservation'));
    }

    public function updateProgram(Request $request, $id)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required|string',
            'status' => 'required|string',
            'note' => 'nullable|string',
        ]);

        $reservation = ProgramReservation::findOrFail($id);
        $reservation->update($request->only('date', 'time', 'status', 'note'));

        return response()->json(['success' => true, 'message' => 'تم تحديث الحجز بنجاح.']);
    }
    
    public function deleteSpecialist($id)
    {
        $reservation = SpecialistReservation::find($id);
        if (!$reservation) {
            return response()->json(['success' => false, 'message' => 'الحجز غير موجود.']);
        }
        $reservation->delete();
        return response()->json(['success' => true, 'message' => 'تم حذف الحجز بنجاح.']);
    }

    public function deleteProgram($id)
    {
        $reservation = ProgramReservation::find($id);
        if (!$reservation) {
            return response()->json(['success' => false, 'message' => 'الحجز غير موجود.']);
        }
        $reservation->delete();
        return response()->json(['success' => true, 'message' => 'تم حذف الحجز بنجاح.']);
    }

}
