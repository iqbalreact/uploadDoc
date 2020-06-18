<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proses;
use DB;


class ProsesController extends Controller
{
    //
    public function index() {

        return Proses::all();
        
    }
    public function addProses(Request $request) {
        $proses = new Proses;
        $proses->nama_proses = $request->nama_proses;
        $proses->save();

        return "Data Berhasil Di Simpan";
    }

    public function updateProses(Request $request) {
        DB::table('proses')->where('id',$request->id)->update([
            'nama_proses' => $request->nama_proses,
        ]);

        return "Data Berhasil Di DiUbah";
    }

    public function deleteProses($id) {
        $proses = Proses::find($id);
        $proses->delete();
        
        return "Data Berhasil Dihapus";
        
    }

}
