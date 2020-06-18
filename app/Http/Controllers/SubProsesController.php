<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubProses;
use DB;


class SubProsesController extends Controller
{
    //
    public function index() {
        return SubProses::all();
    }

    public function addsubProses(Request $request) {
        $proses = new SubProses;
        $proses->proses_id = $request->proses_id;
        $proses->nama_sub = $request->nama_sub;
        $proses->save();
        return "Data Berhasil Di Simpan";
    }

    public function updatesubProses(Request $request) {
        DB::table('sub_proses')->where('id',$request->id)->update([
            'proses_id' => $request->proses_id,
            'nama_sub' => $request->nama_sub
        ]);
        return "Data Berhasil Di DiUbah";
    }

    public function deletesubProses($id) {
        $proses = SubProses::find($id);
        $proses->delete();
        
        return "Data Berhasil Dihapus";
    }
}
