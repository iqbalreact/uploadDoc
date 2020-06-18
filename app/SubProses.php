<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubProses extends Model
{
    //
    protected $table = 'sub_proses';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'proses_id', 'nama_sub'
    ];
    public $timesstamps = true;

    public function Proses()
    {
        return $this->belongsTo('App\Proses');
    }

    public function DaftarSub()
    {
        return $this->hasMany('App\DaftarSub');
    }

}
