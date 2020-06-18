<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proses;
use App\SubProses;
use App\DaftarSub;
use App\Pertanyaan;
use App\Penilaian;
use DB;



class UserController extends Controller
{
    public function p1() {
        $daftar_sub = DaftarSub::All();
        // dd($daftar_sub);
        $p1 = DB::table('pertanyaans')
            ->join('penilaians', 'penilaians.pertanyaans_id', '=', 'pertanyaans.id')
            ->join('daftar_subs', 'penilaians.daftar_sub_id', '=', 'daftar_subs.id')
            ->join('sub_proses', 'daftar_subs.sub_proses_id', '=', 'sub_proses.id')
            ->select('pertanyaans.*', 'penilaians.*','daftar_subs.*','sub_proses.*')
            ->where('sub_proses.nama_sub', 'MANAJEMEN PERUBAHAN')
            ->get();
        return view('pages.p1', compact('p1', 'daftar_sub'));

    }

    public function p2() {
        $daftar_sub = DaftarSub::All();
        // dd($daftar_sub);
        $p1 = DB::table('pertanyaans')
            ->join('penilaians', 'penilaians.pertanyaans_id', '=', 'pertanyaans.id')
            ->join('daftar_subs', 'penilaians.daftar_sub_id', '=', 'daftar_subs.id')
            ->join('sub_proses', 'daftar_subs.sub_proses_id', '=', 'sub_proses.id')
            ->select('pertanyaans.*', 'penilaians.*','daftar_subs.*','sub_proses.*')
            ->where('sub_proses.nama_sub', 'PENATAAN TATALAKSANA')
            ->get();            
        return view('pages.p2', compact('p1', 'daftar_sub'));

    }

    public function p3() {
        $daftar_sub = DaftarSub::All();
        // dd($daftar_sub);
        $p1 = DB::table('pertanyaans')
            ->join('penilaians', 'penilaians.pertanyaans_id', '=', 'pertanyaans.id')
            ->join('daftar_subs', 'penilaians.daftar_sub_id', '=', 'daftar_subs.id')
            ->join('sub_proses', 'daftar_subs.sub_proses_id', '=', 'sub_proses.id')
            ->select('pertanyaans.*', 'penilaians.*','daftar_subs.*','sub_proses.*')
            ->where('sub_proses.nama_sub', 'PENATAAN SISTEM MANAJEMEN SDM')
            ->get();            
        return view('pages.p3', compact('p1', 'daftar_sub'));

    }

    public function p4() {
        $daftar_sub = DaftarSub::All();
        // dd($daftar_sub);
        $p1 = DB::table('pertanyaans')
            ->join('penilaians', 'penilaians.pertanyaans_id', '=', 'pertanyaans.id')
            ->join('daftar_subs', 'penilaians.daftar_sub_id', '=', 'daftar_subs.id')
            ->join('sub_proses', 'daftar_subs.sub_proses_id', '=', 'sub_proses.id')
            ->select('pertanyaans.*', 'penilaians.*','daftar_subs.*','sub_proses.*')
            ->where('sub_proses.nama_sub', 'PENGUATAN AKUNTABILITAS')
            ->get();            
        return view('pages.p4', compact('p1', 'daftar_sub'));

    }

    public function p5() {
        $daftar_sub = DaftarSub::All();
        // dd($daftar_sub);
        $p1 = DB::table('pertanyaans')
            ->join('penilaians', 'penilaians.pertanyaans_id', '=', 'pertanyaans.id')
            ->join('daftar_subs', 'penilaians.daftar_sub_id', '=', 'daftar_subs.id')
            ->join('sub_proses', 'daftar_subs.sub_proses_id', '=', 'sub_proses.id')
            ->select('pertanyaans.*', 'penilaians.*','daftar_subs.*','sub_proses.*')
            ->where('sub_proses.nama_sub', 'PENGUATAN PENGAWASAN')
            ->get();            
        return view('pages.p5', compact('p1', 'daftar_sub'));

    }

    public function p6() {
        $daftar_sub = DaftarSub::All();
        // dd($daftar_sub);
        $p1 = DB::table('pertanyaans')
            ->join('penilaians', 'penilaians.pertanyaans_id', '=', 'pertanyaans.id')
            ->join('daftar_subs', 'penilaians.daftar_sub_id', '=', 'daftar_subs.id')
            ->join('sub_proses', 'daftar_subs.sub_proses_id', '=', 'sub_proses.id')
            ->select('pertanyaans.*', 'penilaians.*','daftar_subs.*','sub_proses.*')
            ->where('sub_proses.nama_sub', 'PENINGKATAN KUALITAS PELAYANAN PUBLIK')
            ->get();            
        return view('pages.p6', compact('p1', 'daftar_sub'));

    }

    


    public function penilaian() {
        $daftarsubs = DaftarSub::all();
        $pertanyaans = Pertanyaan::all();
        // dd($pertanyaans);
        return view ('user.penilaian', compact('daftarsubs','pertanyaans'));
    }
}
