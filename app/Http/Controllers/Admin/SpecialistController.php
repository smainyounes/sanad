<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialistController extends Controller
{
    public function index()
    {
        $specialists = User::where('type', 'specialist')->with('speciality')->latest()->paginate(10);
        $specialities = Speciality::all();

        return view('admin.specialists.index', compact('specialists', 'specialities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'bio' => 'nullable|string',
            'speciality_id' => 'required|exists:specialities,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'email', 'bio', 'speciality_id']);
        $data['type'] = 'specialist';

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/specialists'), $filename);
            $data['image'] = 'uploads/specialists/' . $filename;
        }

        User::create($data);

        return redirect()->back()->with('success', 'Spécialiste ajouté avec succès.');
    }

    public function edit($id)
    {
        $specialist = User::where('type', 'specialist')->findOrFail($id);
        $specialities = Speciality::all();

        return view('admin.specialists.edit', compact('specialist', 'specialities'));
    }

    public function update(Request $request, $id)
    {
        $specialist = User::where('type', 'specialist')->findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $specialist->id,
            'bio' => 'nullable|string',
            'speciality_id' => 'required|exists:specialities,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'email', 'bio', 'speciality_id']);

        if ($request->hasFile('image')) {
            if ($specialist->image && file_exists(public_path($specialist->image))) {
                unlink(public_path($specialist->image));
            }
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/specialists'), $filename);
            $data['image'] = 'uploads/specialists/' . $filename;
        }

        $specialist->update($data);

        return redirect()->route('admin.specialists.index')->with('success', 'Spécialiste mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $specialist = User::where('type', 'specialist')->findOrFail($id);
        if ($specialist->image && file_exists(public_path($specialist->image))) {
            unlink(public_path($specialist->image));
        }
        $specialist->delete();

        return redirect()->back()->with('success', 'Spécialiste supprimé avec succès.');
    }

}
