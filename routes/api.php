<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Proses Api 
Route::get('/proses', 'ProsesController@index')->name('index');
Route::post('/addproses', 'ProsesController@addProses')->name('addProses');
Route::put('/proses/{id}', 'ProsesController@updateProses')->name('updateProses');
Route::delete('/proses/{id}', 'ProsesController@deleteProses')->name('deleteProses');

// Sub Proses Api
Route::get('/subproses', 'SubProsesController@index')->name('index');
Route::post('/addsubproses', 'SubProsesController@addsubProses')->name('addsubProses');
Route::put('/subproses/{id}', 'SubProsesController@updatesubProses')->name('updatesubProses');
Route::delete('/subproses/{id}', 'SubProsesController@deletesubProses')->name('deletesubProses');

// Sub Proses Api
Route::get('/daftarsub', 'DaftarSubController@index')->name('index');
Route::post('/adddaftarsub', 'DaftarSubController@addDaftarSub')->name('adddaftarsub');
Route::put('/daftarsub/{id}', 'DaftarSubController@updateDaftarSub')->name('updatedaftarsub');
Route::delete('/daftarsub/{id}', 'DaftarSubController@deleteDaftarSub')->name('deletedaftarsub');

// Penilaian Api 
Route::get('/penilaian', 'PenilaianController@index')->name('index');
Route::post('/addpenilaian', 'PenilaianController@addPenilaian')->name('addPenilaian');
Route::put('/penilaian/{id}', 'PenilaianController@updatePenilaian')->name('updatePenilaian');
Route::delete('/penilaian/{id}', 'PenilaianController@deletePenilaian')->name('deletePenilaian');


// pertanyaan Api 
Route::get('/pertanyaan', 'PertanyaanController@index')->name('index');
Route::post('/addpertanyaan', 'PertanyaanController@addpertanyaan')->name('addpertanyaan');
Route::post('/pertanyaan', 'PertanyaanController@updatepertanyaan')->name('updatepertanyaan');
Route::delete('/pertanyaan/{id}', 'PertanyaanController@deletepertanyaan')->name('deletepertanyaan');

// Berkas Api 
Route::get('/berkas', 'BerkasController@index')->name('index');
Route::post('/addberkas', 'BerkasController@addBerkas')->name('addberkas');
Route::post('/berkas', 'BerkasController@updateBerkas')->name('updateberkas');
// Route::delete('/berkas/{id}', 'BerkasController@deleteBerkas')->name('deleteberkas');
Route::post('/deleteberkas', 'BerkasController@deleteBerkas')->name('deleteberkas');