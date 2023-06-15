<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;

class RoleRepository
{
    public function roles()
    {
        return Role::paginate(10);
    }
    public function users()
    {
        return User::paginate(10);
    }
}
