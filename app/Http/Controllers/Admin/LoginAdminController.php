<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function show()
    {
        return view('admin.auth.login');
    }

    function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentils = $request->only('email', 'password');
        $credentils['is_admin'] = true;

        if (Auth::guard('admin')->attempt($credentils)) {
            $request->session()->regenerate();
            return redirect()->intended(route("admin.dashboard"));
        }

        return redirectWithStatus(route("admins.login"), "Email or password in correct");
    }
}
