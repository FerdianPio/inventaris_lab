<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("admin.content.dashboard.dashboard");
    }

    public function inventaris()
    {
        return view('admin.content.inventaris.inventaris');
    }

    public function habispakai()
    {
        return view('admin.content.habispakai.habispakai');
    }
}
