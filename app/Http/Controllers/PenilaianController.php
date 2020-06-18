<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penilaian;
use DB;

class PenilaianController extends Controller
{
    //
    public function index() {

        return Penilaian::all();
        
    }
    public function addPenilaian(Request $request) {
        $proses = new Penilaian;
        $proses->daftar_sub_id = $request->daftar_sub_id;
        $proses->pertanyaan_id = $request->pertanyaan_id;
        $proses->save();
        return redirect()->back()->with('success', 'Berhasil!');
    }

    public function updatePenilaian(Request $request) {
        DB::table('penilaians')->where('id',$request->id)->update([
            'daftar_sub_id' => $request->daftar_sub_id,
            'pertanyaan_id' => $request->pertanyaan_id,
        ]);

        return "Data Berhasil Di DiUbah";
    }

    public function deletePenilaian($id) {
        $proses = Penilaian::find($id);
        $proses->delete();
        
        return "Data Berhasil Dihapus";
        
    }
}
