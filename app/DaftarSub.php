<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarSub extends Model
{
    //
    protected $table = 'daftar_subs';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'sub_proses_id', 'nama_daftar'
    ];
    public $timesstamps = true;

    public function SubProses()
    {
        return $this->belongsTo('App\SubProses');
    }

    public function Penilaian()
    {
        return $this->hasMany('App\Penilaian');
    }
}
