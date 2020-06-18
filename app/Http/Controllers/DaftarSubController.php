<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DaftarSub;
use DB;

class DaftarSubController extends Controller
{
    //
    public function index() {
        return DaftarSub::all();
    }

    public function addDaftarSub(Request $request) {
        $proses = new DaftarSub;
        $proses->sub_proses_id = $request->sub_proses_id;
        $proses->nama_daftar = $request->nama_daftar;
        $proses->save();
        return "Data Berhasil Di Simpan";
    }

    public function updateDaftarSub(Request $request) {
        DB::table('daftar_subs')->where('id',$request->id)->update([
            'sub_proses_id' => $request->sub_proses_id,
            'nama_daftar' => $request->nama_daftar
        ]);
        return "Data Berhasil Di DiUbah";
    }

    public function deleteDaftarSub($id) {
        $proses = DaftarSub::find($id);
        $proses->delete();
        
        return "Data Berhasil Dihapus";
    }
}
