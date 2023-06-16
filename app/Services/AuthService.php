<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class AuthService
{

    public function login($request, $credentials)
    {
        if (auth()->guard('user')->attempt($credentials)) {
            $user = auth()->guard('user')->user();
            // dd($user);
            if ($user->role_id == 2) {
                $request->session()->regenerate();
                $user = auth()->guard('admin')->attempt($credentials);
                // dd(auth()->guard('admin')->user());
            } elseif ($user->role_id == 1) {
                // $request->session()->invalidate();
                $request->session()->regenerate();
                // dd(auth()->guard('user')->user());
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
