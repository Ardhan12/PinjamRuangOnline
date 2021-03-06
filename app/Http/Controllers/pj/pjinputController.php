<?php


namespace App\Http\Controllers\PJ;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\gedung;
use App\ruangan;

use Illuminate\Http\Request;

class pjinputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gedung = gedung::all();
        return view('pj.create')->with('gedung',$gedung);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pj.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruangan = new ruangan;

        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->namagedung = $request->namagedung;
        $ruangan->kapasitas = $request->kapasitas;
        $ruangan->save();
        return redirect('/pj/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$gedung = gedung::find($nama_gedung);

        //return view('pj.create',['gedung'=>$gedung]);
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
