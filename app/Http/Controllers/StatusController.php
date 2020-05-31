<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\booking;

class StatusController extends Controller
{
    public function index(){
        $book = booking::all();

        return view('status')->with('book',$book);
    }
    public function status()
    {
        return view('status');
    }
}
