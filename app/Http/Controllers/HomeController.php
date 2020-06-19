<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proses;
use App\SubProses;
use App\DaftarSub;
use App\Pertanyaan;
use App\Penilaian;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/dashboard');
    }
}
