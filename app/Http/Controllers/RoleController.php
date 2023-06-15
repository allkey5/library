<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Services\RoleService;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(RoleRepository $roleRepository){
        $roles = $roleRepository->roles();
        return view('admin.roles.index', compact('roles'));
    }
    public function create(RoleRepository $roleRepository){
        $users = $roleRepository->users();
        return view('admin.roles.create', compact('users'));
    }
    public function store(RoleRequest $request, RoleService $roleService){
        $roleService->create($request);
    }
    public function show(){
        
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function destroy(Role $role, RoleService $roleService){
        $roleService->destroy($role);
        return redirect(route('roles.index'));
    }
}
