<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Program;
use App\Models\Speciality;

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

        return view('client.home', compact('specialists', 'programs'));
    }

    public function programs(Request $request)
    {
        $programs = Program::with(['category', 'specialist'])
            ->orderBy('date', 'asc')
            ->paginate(8);

        return view('client.programs', compact('programs'));
    }

    public function specialists(Request $request)
    {
        $specialists = User::where('type', 'specialist')
            ->with('speciality')
            ->latest()
            ->paginate(9);

        $specialities = Speciality::orderBy('id')->get();

        return view('client.specialists', compact('specialists', 'specialities'));
    }
}
