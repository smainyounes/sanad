<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Program;
use App\Models\Speciality;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $specialists = User::where('type', 'specialist')
            ->with('speciality')
            ->latest()
            ->take(6)
            ->get();

        $programs = Program::with(['category', 'specialist'])
            ->orderBy('date', 'asc')
            ->take(6)
            ->get();

        return view('client_new.home', compact('specialists', 'programs'));
    }

    public function programs(Request $request)
    {
        $programs = Program::with(['category', 'specialist'])
            ->orderBy('date', 'asc')
            ->paginate(8);

        return view('client_new.programs', compact('programs'));
    }

    public function specialists(Request $request)
    {
        $specialists = User::where('type', 'specialist')
            ->with('speciality')
            ->latest()
            ->paginate(9);

        $specialities = Speciality::orderBy('id')->get();

        return view('client_new.specialists', compact('specialists', 'specialities'));
    }

    public function contactSubmit(Request $request)
    {
        // ✅ Validate inputs
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
            'phone' => 'nullable',
        ]);

        // ✅ Create contact record
        Contact::create($validated);

        // ✅ Redirect with success message
        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح! سنقوم بالرد عليك قريباً.');
    }
}
