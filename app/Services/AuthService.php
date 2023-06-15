<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthService
{

    public function login($request, $credentials)
    {
        if (auth()->guard('admin')->attempt($credentials)) {
            $user = auth()->guard('admin')->user();
            if ($user->role_id == 2) {
                $request->session()->regenerate();
            } elseif ($user->role_id == 1 && auth()->guard('web')->attempt($credentials)) {
                $request->session()->regenerate();
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout($request)
    {
        $request->session()->invalidate();
    }
    public function register($data)
    {
        return DB::transaction(function () use ($data) {
            User::create($data);
        });
    }
}
