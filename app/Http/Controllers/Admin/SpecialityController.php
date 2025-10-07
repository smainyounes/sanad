<?php

namespace App\Http\Controllers\Admin;

use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialityController extends Controller
{
    public function index()
    {
        $specialities = Speciality::latest()->paginate(10);
        return view('admin.specialities.index', compact('specialities'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:specialities,name',
        ]);

        Speciality::create($validated);

        return redirect()->back()->with('success', 'Speciality added successfully.');
    }

    public function update(Request $request, Speciality $speciality)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:specialities,name,' . $speciality->id,
        ]);

        $speciality->update($validated);

        return redirect()->back()->with('success', 'Speciality updated successfully.');
    }

    public function destroy(Speciality $speciality)
    {
        $speciality->delete();

        return redirect()->back()->with('success', 'Speciality deleted successfully.');
    }

}
