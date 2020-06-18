<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    //
    protected $table = 'proses';
    protected $primaryKey = 'id';
    protected $fillable = [ 
        'nama_proses'
    ];
    public $timesstamps = true;

    public function SubProses()
    {
        return $this->hasMany('App\SubProses');
    }
}
