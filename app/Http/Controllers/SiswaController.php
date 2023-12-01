<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan seluruh siswa
        $siswas = Siswa::ALL();
        return view('data_siswa' ,compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan formulir tambah data
        return view('tambah_siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menyimpan data form ke database
        $siswa = new Siswa;
        $siswa->kode_siswa = $request->kode_siswa;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nisn = $request->nisn;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->telepon = $request->no_telepon;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->email = $request->email;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->angkatan = $request->angkatan;
        $siswa->save();
        $siswas = Siswa::All();
        return redirect('/data_siswa')->with('pesan' ,"Tambah data siswa telah berhasil")->with(compact('siswas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
        return view('detail_siswa' ,compact('siswa'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        // Menampilkan data siswa ke dalam 
        return view('ubah_siswa' ,compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
        $siswa = siswa::find($request->id);
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->nisn = $request->nisn;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->alamat = $request->alamat;
        $siswa->telepon = $request->no_telepon;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->email = $request->email;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->angkatan = $request->angkatan;
        $siswa->save();
        $siswas = Siswa::All();
        return redirect('/data_siswa')->with('pesan' ,"Ubah data siswa telah berhasil")->with(compact('siswas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        // 
        $siswa->delete();
        $siswas = Siswa::All();
        return redirect('/data_siswa')->with('pesan' ,"Hapus data siswa telah berhasil")->with(compact('siswas'));
    }

    public function showtwo()
    {
        // Menampilkan seluruh siswa
        $siswas = Siswa::ALL();
        return view('cetak_kartu' ,compact('siswas'));
    }
}
