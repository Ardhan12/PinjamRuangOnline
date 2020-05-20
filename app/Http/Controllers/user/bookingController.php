<?php

namespace App\Http\Controllers\user;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\gedung;
use App\ruangan;
use App\booking;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = ruangan::all();

        return view('booking')->with('ruangan',$ruangan);
     //   $ruangan = DB::table('ruangan')
       //         ->join('gedung','ruangan.namagedung','=','gedung.nama_gedung')
         //       ->select('ruangan.*','gedung.nama_gedung');

//        return view('booking',['ruangan'=> $ruangan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = DB::table('bookingruangan')->get();
        return view('booking', ['book' => $book]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new booking;

        $book->npm = $request->npm;
        $book->nama_peminjam = $request->nama_peminjam;
        $book->foto_ktm = $request->foto_ktm;
        $book->surat = $request->surat;
        $book->cp_user = $request->cp_user;
        $book->tanggal_pinjam = $request->tanggal_pinjam;
        $book->save();

        return redirect('booking');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
