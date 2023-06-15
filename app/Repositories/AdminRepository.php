<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\App;

class AdminRepository
{
    public function admins()
    {
        return User::where('role_id', 2);
    }
}
