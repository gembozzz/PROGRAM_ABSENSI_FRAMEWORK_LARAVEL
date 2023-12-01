<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laporans = Laporan::All();
        return view('laporan' ,compact('laporans'));
    }

    public function pencarian(Request $request)
    {
        if($request->kirim=='cari'){
            $laporans = Laporan::where('tanggal','>=',$request->tgl_awal)->where('tanggal','<=',$request->tgl_akhir)->get();
            return view('/laporan' ,compact('laporans'));  
        }elseif($request->kirim=='cetak'){
            $laporans = Laporan::where('tanggal','>=',$request->tgl_awal)->where('tanggal','<=',$request->tgl_akhir)->get();
            return view('/cetak_laporan' ,compact('laporans')); 
        }elseif($request->kirim=='export'){
                $tgl_awal = $request->tgl_awal;
                $tgl_akhir = $request->tgl_akhir;
                $laporans = Laporan::where('tanggal','>=',$request->tgl_awal)->where('tanggal','<=',$request->tgl_akhir)->get();
                return view('/export_laporan' ,compact('laporans','tgl_awal','tgl_akhir')); 
        } 
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
