<?php

namespace App\Http\Controllers\pj;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PJInformasiController extends Controller
{
    public function show()
    {
        return view('pj.pjinformasi');
    }
}
