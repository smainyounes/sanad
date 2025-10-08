<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display and edit profile form.
     */
    public function index()
    {
        $user = Auth::user();
        return view('client.profile', compact('user'));
    }

    /**
     * Update profile info.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'bio'   => 'nullable|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->only(['name', 'email', 'bio']);

        if ($request->hasFile('image')) {
            // delete old image if exists and is not the default placeholder
            if ($user->image) {
                $oldPath = public_path($user->image);
                // Make sure we don't accidentally delete a shared/default asset
                if (file_exists($oldPath) && strpos($user->image, 'default-user.png') === false) {
                    @unlink($oldPath);
                }
            }

            // save new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/users'), $imageName);
            $data['image'] = 'uploads/users/' . $imageName;
        }

        $user->update($data);

        return redirect()->back()->with('success', 'تم تحديث معلوماتك بنجاح ✅');
    }

}