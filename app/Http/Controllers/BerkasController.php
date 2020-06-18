<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berkas;
use DB;

class BerkasController extends Controller
{
    //
    public function index() {

        return Berkas::all();
        
    }
    public function addBerkas(Request $request) {

        $data = $request->all();
        // $pertanyaan_id = $data['pertanyaan_id'];
        // $prog_evaluasi = $data['prog_evaluasi'];
        // $keterangan = $data['keterangan'];
        // $bukti = $data['bukti'];
        // $file = $data['file'];

        $id = $request->pertanyaan_id;
        $prog = $request->prog_evaluasi;
        $ket = $request->keterangan;
        $buk = $request->bukti;
        $fil = $request->file;
            
        $count = count($id);
        for($i = 0; $i < $count; $i++){
            $data = array(
                'id' => $id[$i],
                'prog_evaluasi' => $prog[$i],
                'keterangan' => $ket[$i],
                'bukti' => $buk[$i],
                'file' => $fil[$i],
                
            );
            $insertData[] = $data;
        }

        dd($insertData);
        // foreach ($insertData as $key) {
        //     $proses = new Berkas;
        //     $proses->pertanyaan_id = $key['id'];
        //     $proses->prog_evaluasi = $key['prog_evaluasi'];
        //     $proses->keterangan = $key['keterangan'];
        //     $proses->bukti = $key['bukti'];
        //     $proses->save();
        // }
        // foreach ($request as $key) {
            # code...
            // echo $key->pertanyaan_id;
            // foreach ($key as $item) {
            //     print("<pre>".print_r($item['pertanyaan_id'],true)."</pre>");
            //     # code...
            //     // echo $item->pertanyaan_id;
            // }
            // $proses = new Berkas;
            // $proses->pertanyaan_id = $key->pertanyaan_id;
            // $proses->prog_evaluasi = $key->prog_evaluasi;
            // $proses->keterangan = $key->keterangan;
            // $key->validate([
            //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            // ]);
            // $fileName = time().'.'.$key->file->extension();  
            // $key->file->move(public_path('document'), $fileName);
            // $proses->file = $fileName;
            // $proses->save();
        // }

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

    public function deleteBerkas($id) {
        $proses = Berkas::find($id);
        $proses->delete();
        
        return "Data Berhasil Dihapus";
        
    }
}
