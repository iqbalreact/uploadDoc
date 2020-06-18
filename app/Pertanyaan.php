<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $table = 'pertanyaans';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'daftar_pertanyaan', 'prog_evaluasi', 'keterangan', 'file'
    ];
    public $timesstamps = true;
    public function Penilaian()
    {
        return $this->hasMany('App\Penilaian');
    }
}
