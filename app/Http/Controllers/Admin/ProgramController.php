<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Program;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with(['category', 'specialist'])->latest()->paginate(10);
        $categories = Category::all();
        $specialists = User::where('type', 'specialist')->get();

        return view('admin.programs.index', compact('programs', 'categories', 'specialists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'specialist_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'is_online' => 'required|boolean',
            'status' => 'required|in:active,desactive',
        ]);

        Program::create($request->all());

        return redirect()->back()->with('success', 'تم إضافة البرنامج بنجاح.');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        $categories = Category::all();
        $specialists = User::where('type', 'specialist')->get();

        return view('admin.programs.edit', compact('program', 'categories', 'specialists'));
    }

    public function update(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'specialist_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'is_online' => 'required|boolean',
            'status' => 'required|in:active,desactive',
        ]);

        $program->update($request->all());

        return redirect()->route('admin.programs.index')->with('success', 'تم تحديث البرنامج بنجاح.');
    }

    public function destroy($id)
    {
        Program::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'تم حذف البرنامج بنجاح.');
    }

}
