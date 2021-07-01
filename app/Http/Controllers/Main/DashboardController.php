<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\HabisPakai;
use App\Models\Inventaris;
use App\Models\Ruang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['inventaris'] = Inventaris::count();
        $data['habispakai'] = HabisPakai::count();
        $data['ruang'] = Ruang::count();
        // $data = Inventaris::count();

        return view("admin.content.dashboard.dashboard")->with(['data'=>$data]);
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
