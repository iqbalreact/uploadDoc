<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    //
    protected $table = 'berkas';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'pertanyaan_id', 'prog_evaluasi', 'keterangan','bukti', 'file'
    ];

    public $timesstamps = true;
}
