<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.layout.admin');
    }
    public function admin()
    {
        return view('admin.index');
    }
}
