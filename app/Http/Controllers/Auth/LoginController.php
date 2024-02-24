<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{

    public function index()
    {

        return view("auth.login");
    }

    public function authenticate(Request $request)
    {

        try {
            $credentials = $request->validate([
                'user_name' => ['required'],
                'password' => ['required'],
            ]);

        } catch (\Exception $e) {
            return redirect()->back()->with("error", "جميع الحقول مطلوبة");
        }
        // dd($request->all());
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'user_name' => 'اسم المستخدم وكلمة المرور غير متطابقين',
        ])->onlyInput('user_name');

    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

}
