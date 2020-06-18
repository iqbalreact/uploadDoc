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
    //
    public function index() {

        // $satu = UsulanPensiun::where('id', $id)->first();

        // $proses = Proses::with('sub_proses')->get;
        // $penilaians = DB::table('pertanyaans')
        //     ->join('penilaians', 'penilaians.pertanyaans_id', '=', 'pertanyaans.id')
        //     ->join('daftar_subs', 'penilaians.daftar_sub_id', '=', 'daftar_subs.id')
        //     ->join('sub_proses', 'daftar_subs.sub_proses_id', '=', 'sub_proses.id')
        //     ->select('pertanyaans.*', 'penilaians.*','daftar_subs.*','sub_proses.*')
        //     ->orderBy('penilaians.daftar_sub_id')
        //     ->get()->groupBy('nama_daftar');
        //     // return response()->json($penilaians);
        //     // dd($penilaians);
        // return view('pages.form', compact('penilaians'));
        return view('pages.p1');

    }

    public function penilaian() {
        $daftarsubs = DaftarSub::all();
        $pertanyaans = Pertanyaan::all();
        // dd($pertanyaans);
        return view ('user.penilaian', compact('daftarsubs','pertanyaans'));
    }
}
