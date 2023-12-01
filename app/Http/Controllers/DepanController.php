<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Laporan;

class DepanController extends Controller
{
    //
    public function masuk()
    {
        return view('masuk');
    }

    public function keluar()
    {
        return view('keluar');
    }

    public function storemasuk(Request $request)
    {
        $tgl = date('Y-m-d');
        $waktu = date('H:i:s');
        $h = date('D', strtotime($tgl));
        $hari_list = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu',
        );
        $hari=$hari_list[$h];
        $s = Siswa::where('kode_siswa', $request->code)->first();
        $l = Laporan::where('siswa_id', $s->id)->where('tanggal',$tgl)->first();

        if ($l == null) {
            $laporan = new Laporan;
            $laporan->siswa_id = $s->id;
            $laporan->tanggal = $tgl;
            $laporan->hari =$hari;
            $laporan->waktu_masuk = $waktu;
            $laporan->waktu_pulang = "00:00:00";
            $laporan->keterangan = "Hadir";
            $laporan->save();

            return redirect('/')->with('pesan', 'Selamat Datang ' .$s->nama_siswa);
        }else{
            return redirect('/')->with('pesan', 'Hai '.$s->nama_siswa.', Anda Sudah Absen');
        }
    }

    public function storekeluar(Request $request)
    {
        $tgl = date('Y-m-d');
        $waktu = date('H:i:s');
        $s = Siswa::where('kode_siswa', $request->code)->first();
        $l = Laporan::where('siswa_id', $s->id)->where('tanggal',$tgl)->first();
        
        if ($l == null) {
        
            return redirect('/')->with('pesan', ''.$s->nama_siswa.' Anda belum Absen');
        }else{
            $laporan = Laporan::find($l->id);
            $laporan->waktu_pulang = $waktu;
            $laporan->save();

            return redirect('/')->with('pesan', 'Hati-Hati Dijalan '.$s->nama_siswa.' &hearts;');
        }
    }
}
