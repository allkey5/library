<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->users();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // var_dump($user);
        return view('account', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.create', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user, UserRepository $userRepository)
    {
        if (password_verify($request->password, $user->password)) {
            $validatedData =$request->validated();
            var_dump($validatedData);
            $user->update($validatedData);
            return redirect(route('users.index'));
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('users.index'));
    }
}
