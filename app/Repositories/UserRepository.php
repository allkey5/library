<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;

class UserRepository
{
    public function users()
    {
        return User::where('role_id', '1')->get();
    }
}
