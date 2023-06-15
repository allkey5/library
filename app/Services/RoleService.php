<?php

namespace App\Services;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleService
{
    public function create(RoleRequest $request)
    {
        DB::transaction(function () use ($request) {
            Role::create($request);
        });
    }
    public function destroy($role)
    {
        DB::transaction(function () use ($role) {
            $role->delete();
        });
    }
}
