<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\AuthService;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request, AuthService $authService)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $authService->login($request, $credentials);
    }
    public function logout(AuthService $authService, Request $request)
    {
        $authService->logout($request);
        return view('admin.layout.admin');
    }
    public function register(UserRequest $request, AuthService $authService) {
        $data = $request->validated();
        $authService->register($data);
        return view('login');
    }
}