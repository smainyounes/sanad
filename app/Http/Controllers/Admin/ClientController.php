<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index()
    {
        $clients = User::whereIn('type', ['student', 'parent'])->paginate(10);
        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'type' => ['required', Rule::in(['student', 'parent'])],
            'bio' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('users', 'public');
        }

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('admin.clients.index')->with('success', 'Client created successfully.');
    }

    public function edit(User $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    public function update(Request $request, User $client)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($client->id)],
            'type' => ['required', Rule::in(['student', 'parent'])],
            'bio' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'password' => 'nullable|min:6',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('users', 'public');
        }

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $client->update($validated);

        return redirect()->route('admin.clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(User $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index')->with('success', 'Client deleted successfully.');
    }
}
