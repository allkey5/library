<?php

namespace App\Http\Controllers;

use App\Library\Services\AuthService;
use App\Repositories\AdminRepository;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\Helper;


class AdminController extends Controller
{
    public function index(AdminRepository $adminRepository)
    {
        $admins = $adminRepository->admins();
        return view('admin.admins.index', compact('admins'));
    }
}
