<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use DB;

class PertanyaanController extends Controller
{
    //
    public function index() {
        return Pertanyaan::all();
    }

    public function addpertanyaan(Request $request) {
        $proses = new Pertanyaan;
        $proses->daftar_pertanyaan = $request->daftar_pertanyaan;
        $proses->prog_evaluasi = $request->prog_evaluasi;
        $proses->keterangan = $request->keterangan;

        if($request->has('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            // dd($image);
            $image->move(public_path('document'), $filename);
            $proses->file = $request->file('image')->getClientOriginalName();
        }
        $proses->save();
        return "Data Berhasil Di Simpan";
    }

    public function updatepertanyaan(Request $request) {
        
        // dd($request);


        // $scores = $request->input('scores');


        // foreach($scores as $row){
        //     echo $id = $row['pertanyaan_id']; 

        //     DB::table('pertanyaans')->where('id', $row['pertanyaan_id'])->update([
        //         'prog_evaluasi' => $row['prog_evaluasi'],
        //         'keterangan' => $row['keterangan'],
        //         // 'berkas' => $berkas,
        //     ]);
        // }

        // return back() -> with('success', 'You have successfully upload file.');
    }

    public function deletepertanyaan($id) {
        $proses = Pertanyaan::find($id);
        $proses->delete();
        
        return "Data Berhasil Dihapus";
    }
}
