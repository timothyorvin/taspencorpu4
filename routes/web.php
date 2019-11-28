<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('login');
// });



Route::get('welcome', 'ControllerUser@index');
Route::get('login', 'ControllerUser@login');
Route::post('loginPost', 'ControllerUser@loginPost');
Route::get('logout','ControllerUser@logout');

Route::get('event', function () {
    return view('event');
});

Route::get('jenis', 'ControllerJenis@view');

Route::get('bentuk', 'ControllerBentuk@view');

Route::get('kategori', 'ControllerKategori@view');

Route::get('katalog', 'ControllerKatalog@view');

Route::get('tambahKatalog', function () {
    return view('tambahKatalog');
});

Route::get('tes',function(){
	return view('tes');
});

Route::get('penyerapan', 'ControllerDashboard@getDataAnggaran');

Route::get('pelaksanaan', function(){
	return view('pelaksanaan');
});
Route::get('pelaksanaan/api','ControllerDashboard@getDataPelaksanaan');

Route::get('/displaypeserta', function () {
    return view('displaypeserta');
});

Route::get('upload/{id}', 'ControllerEvent@upload');

Route::get('/event', 'ControllerEvent@view');
Route::get('/tambahEvent/api','ControllerEvent@add');
Route::post('/hapusEvent/{id}','ControllerEvent@delete');
Route::post('/event/{id}', 'ControllerEvent@view2');
Route::get('/editEvent/{id}','ControllerEvent@edit');
Route::get('/editEventDone/{id}','ControllerEvent@editDone');
Route::get('/approval1/{id}','ControllerEvent@approval1');
Route::get('/approval2/{id}','ControllerEvent@approval2');
Route::get('/feedbackfasilitator/{id}/{id1}','ControllerEvent@feedbackfasilitator');
Route::get('/feedbackDone/{id}/{id1}','ControllerEvent@feedbackdone');
Route::get('/nilaipeserta/{id}/{id1}','ControllerEvent@nilaipeserta');
Route::get('/nilaiDone/{id}/{id1}','ControllerEvent@nilaiDone');
Route::get('/lihatnilai/{id}/{id1}','ControllerEvent@lihatnilai');
Route::get('/lihatfeedback/{id}','ControllerEvent@lihatfeedback');

Route::get('tambahJenis/api', 'ControllerJenis@add');
Route::get('editJenis/{id}', 'ControllerJenis@edit');
Route::get('editJenDone/{id}', 'ControllerJenis@editDone');
Route::post('/deleteJenis','ControllerJenis@delete');
Route::get('tambahBentuk/api','ControllerBentuk@add');
Route::get('/editBentuk/{id}','ControllerBentuk@edit');
Route::get('/editDone/{id}','ControllerBentuk@editDone');
Route::post('/deleteBentuk','ControllerBentuk@delete');
Route::get('tambahKategori/api','ControllerKategori@add');
Route::post('/deleteKategori','ControllerKategori@delete');
Route::get('/editKategori/{id}','ControllerKategori@edit');
Route::get('/editKatDone/{id}','ControllerKategori@editDone');

Route::get('tambahKatalog/api','ControllerKatalog@add');
Route::get('/editKatalog/{id}','ControllerKatalog@edit');
Route::get('/editKatlDone/{id}','ControllerKatalog@editDone');
Route::post('/deleteKatalog','ControllerKatalog@delete');

Route::get('/displaypeserta/{id}','ControllerEvent@displaypeserta');

Route::get('/displayabsensi/{id}','ControllerEvent@viewAbsensi');

Route::get('/absensi/{id}','ControllerEvent@absensi');
Route::get('/absensi2/{id}','ControllerEvent@absensiDone');

Route::get('/tambahpeserta/{id}','ControllerEvent@tambahPeserta');
Route::get('/tambahPesertaDone/api','ControllerEvent@tambahPesertaDone');

Route::get('/displayfasilitator/{id}','ControllerEvent@displayfasilitator');

// Route::get('/tambahfasilitator/{id}','ControllerEvent@tambahFasilitator');
