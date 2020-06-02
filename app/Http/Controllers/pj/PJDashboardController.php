<?php

namespace App\Http\Controllers\PJ;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\gedung;
use App\Ruangan;

class PJDashboardController extends Controller
{
    public function index(){
        $gedung = gedung::all();

        return view('pj.pjdashboard')->with('gedung',$gedung);
    }
    public function show()
    {
        return view('pj.pjdashboard');
    }
}
