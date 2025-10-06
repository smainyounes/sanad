<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!Auth::guard('admin')->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('error', 'mauvais e-mail ou mot de passe');
        }

        if (Auth::guard('admin')->user()->admin_type != 'super_admin' && !Auth::guard('admin')->user()->can_login) {
            Auth::guard('admin')->logout();
            return back()->with('error', 'vous n\'avez pas le droit d\'accéder a la platform');
        }

        return redirect()->intended();
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        return redirect()->to('/');
    } 
}
