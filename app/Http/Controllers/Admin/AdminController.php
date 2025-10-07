<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Notifications\AdminInvitationNotification;

class AdminController extends Controller
{
    public function dashboard()
    {
        $specialitiesCount = \App\Models\Speciality::count();
        $categoriesCount = \App\Models\Category::count();
        $specialistsCount = \App\Models\User::where('type', 'specialist')->count();
        $adminsCount = \App\Models\Admin::count();

        return view('admin.dashboard', compact('specialitiesCount', 'categoriesCount', 'specialistsCount', 'adminsCount'));
    }

    // Show list of admins
    public function index()
    {
        $admins = Admin::whereNot('id', Auth::guard('admin')->id())->orderBy('name')->get();
        return view('admin.admins.index', compact('admins'));
    }

    // Show form to create a new admin
    public function create()
    {
        return view('admin.admins.create');
    }

    // Store a new admin
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'admin_type' => 'required|string',
            'can_login' => 'required|boolean',
            'phone' => 'nullable|string|max:15',
        ]);

        // Create admin without password
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'admin_type' => $request->admin_type,
            'can_login' => $request->can_login,
            'phone' => $request->phone,
            'password' => "",
        ]);

        // Generate invitation token and send the invitation email
        $admin->generateInvitationToken();
        $admin->notify(new AdminInvitationNotification($admin->invitation_token));


        return redirect()->route('admins.index')->with('success', 'تم إنشاء المدير بنجاح.');
    }

    // Show form to edit an existing admin
    public function edit(Admin $admin)
    {
        return view('admin.admins.edit', compact('admin'));
    }

    // Update an existing admin
    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'password' => 'nullable|string|min:8|confirmed',
            'admin_type' => 'required|string|max:255',
            'can_login' => 'required|boolean',
            'phone' => 'nullable|string|max:20',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($request->password);
        }

        $admin->update($validatedData);

        return redirect()->route('admins.index')->with('success', 'تم تحديث المدير بنجاح.');
    }

    // Delete an admin
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'تم حذف المدير بنجاح.');
    }


    /**
     * Show form to set password for invited admin.
    *
    * @param  string  $token
    * @return \Illuminate\View\View
    */
    public function showSetPasswordForm($token)
    {
        $admin = Admin::where('invitation_token', $token)->firstOrFail();

        if (!$admin->isInvitationValid()) {
            abort(403, 'رابط الدعوة غير صالح أو منتهي الصلاحية.');
        }

        return view('admin.admins.set_password', compact('admin', 'token'));
    }

    public function setPassword(Request $request, $token)
    {
        $admin = Admin::where('invitation_token', $token)->firstOrFail();

        if (!$admin->isInvitationValid()) {
            return redirect()->route('login')->withErrors('رابط الدعوة غير صالح أو منتهي الصلاحية.');
        }

        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Set the password and clear invitation details
        $admin->password = Hash::make($request->password);
        $admin->clearInvitation();

        return redirect()->route('admin.login')->with('success', 'تم تعيين كلمة المرور بنجاح. يمكنك الآن تسجيل الدخول.');
    }

    public function regenInviteToken($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->generateInvitationToken();
        $admin->notify(new AdminInvitationNotification($admin->invitation_token));

        return back()->with('success', 'تم إعادة إرسال الدعوة.');
    }
}
