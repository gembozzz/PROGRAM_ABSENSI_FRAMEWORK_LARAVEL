<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jadwals = Jadwal::ALL();
        return view('jadwal' ,compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambah_jadwal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $jadwal = new Jadwal;
        $jadwal->tanggal = $request->tanggal;
        $jadwal->keterangan = $request->keterangan;
        $jadwal->save();
        $jadwals = Jadwal::All();
        return redirect('/jadwal')->with('pesan' ,"Tambah data jadwal telah berhasil")->with(compact('jadwals'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
        return view('ubah_jadwal' ,compact('jadwal'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        //
        $jadwal = jadwal::find($request->id);
        $jadwal->tanggal = $request->tanggal;
        $jadwal->keterangan = $request->keterangan;
        $jadwal->save();
        $jadwals = Jadwal::All();
        return redirect('/jadwal')->with('pesan' ,"Ubah data jadwal telah berhasil")->with(compact('jadwals'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
        $jadwal->delete();
        $jadwals = Jadwal::All();
        return redirect('/jadwal')->with('pesan' ,"Hapus data jadwal telah berhasil")->with(compact('jadwals'));
    }
}
