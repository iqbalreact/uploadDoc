<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berkas;
use Illuminate\Support\Facades\File;
use DB;

class BerkasController extends Controller
{
    //
    public function index() {
        return Berkas::all();
        
    }
    public function addBerkas(Request $request) {

        $p1 = new Berkas;
        $p1->daftar_sub_id = $request->daftar_sub_id;
        $p1->pertanyaan_id = $request->pertanyaan_id;
        $p1->prog_evaluasi = $request->prog_evaluasi;
        $p1->keterangan = $request->keterangan;
        if($request->has('file')) {
            $image = $request->file('file');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('documents'), $filename);
            $p1->file = $request->file('file')->getClientOriginalName();
        }
        $p1->save();
        return redirect('admin/p1')->with('success', 'Berhasil Upload');
    }

    public function updateBerkas(Request $request) {
        DB::table('berkas')->where('id',$request->id)->update([
            'pertanyaan_id' => $request->pertanyaan_id,
            'prog_evaluasi' => $request->prog_evaluasi,
            'keterangan' => $request->keterangan,
            'file' => $request->file,
        ]);

        return "Data Berhasil Di DiUbah";
    }

    public function deleteBerkas(Request $id) {
        
        $data = Berkas::find($id);
        $directory = 'documents/'.$data[0]->file;
        File::delete($directory);
        $data->each->delete();
        return redirect()->back();        
    }



}
