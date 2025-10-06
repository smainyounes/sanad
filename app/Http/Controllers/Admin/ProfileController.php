<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function settings()
    {
        return view('admin.profile');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = Auth::guard('admin')->user();

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->password);
        }

        if ($user->save()) {
            return back()->with('success', 'mot de passe mis a jour avec succés');
        }

        return back()->with('error', 'mot de passe n\'a pas été mis a jour');

    }

    public function updateInfos(Request $request)
    {
        $request->validate([
            'email' => 'nullable|email|unique:admins,email',
            'name' => 'nullable',
        ]);

        $user = Auth::guard('admin')->user();
        
        if ($request->has('name') && $request->name) {
            $user->name = $request->name;
        }

        if ($request->has('email') && $request->email) {
            $user->email = $request->email;
        }

        if ($user->save()) {
            return back()->with('success', 'informations mis a jour avec succés');
        }

        return back()->with('error', 'information n\'ont pas été mis a jour');

    }
}
