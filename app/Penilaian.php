<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    //
    protected $table = 'penilaians';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'daftar_subs_id', 'pertanyaan_id'
    ];
    public $timesstamps = true;

    public function DaftarSub()
    {
        return $this->belongsTo('App\DaftarSub');
    }

    public function Pertanyaan()
    {
        return $this->hasMany('App\Pertanyaan');
    }
}
