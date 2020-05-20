<?php

namespace App\Http\Controllers\pj;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\gedung;
use App\ruangan;

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
