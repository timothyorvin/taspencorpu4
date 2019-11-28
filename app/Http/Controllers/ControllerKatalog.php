<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ControllerKatalog extends Controller
{
	public function add(){
		$bentuk_pendidikan = $_GET['bentuk_pendidikan'];
		$katalog_pendidikan = $_GET['katalog_pendidikan'];
		$kategori_pendidikan = $_GET['kategori_pendidikan'];
		$jenis_pendidikan = $_GET['jenis_pendidikan'];


		$bentuk_pendidikan = substr($bentuk_pendidikan,0,2);
		$kategori_pendidikan = substr($kategori_pendidikan,0,1);
		$jenis_pendidikan = substr($jenis_pendidikan,0,2);

		$bentuk_pendidikan = (int)$bentuk_pendidikan;
		$kategori_pendidikan = (int)$kategori_pendidikan;
		$jenis_pendidikan = (int)$jenis_pendidikan;

		$katalog = DB::select('SELECT * FROM KATALOGPELATIHAN');

		DB::table('KATALOGPELATIHAN')->insert(['IDBentukPelatihan'=>$bentuk_pendidikan,'IDJenisPelatihan'=>$jenis_pendidikan,'IDKategoriPelatihan'=>$kategori_pendidikan,'NamaKatalog'=>$katalog_pendidikan]);

		return \Redirect::back();
	}

	public function edit(Request $req,$id){
		$bentuk_pendidikan = $req['bentuk_pendidikan'];
		$katalog_pendidikan = $req['katalog_pendidikan'];
		$kategori_pendidikan = $req['kategori_pendidikan'];
		$jenis_pendidikan = $req['jenis_pendidikan'];

		$jenis = DB::select("SELECT JenisPelatihan=CAST(IDJenisPelatihan AS VARCHAR)+' '+JenisPelatihan FROM JENISPELATIHAN");
		$kategori = DB::select("SELECT KategoriPelatihan=CAST(IDKategoriPelatihan AS VARCHAR)+' '+KategoriPelatihan FROM KATEGORIPELATIHAN");
		$bentuk = DB::select("SELECT BentukPelatihan=CAST(IDBentukPelatihan AS VARCHAR)+' '+BENTUKPELATIHAN FROM BENTUKPELATIHAN");
		$katalog = DB::select("SELECT * FROM KATALOGPELATIHAN kp JOIN JenisPelatihan jp ON kp.IDJenisPelatihan = jp.IDJenisPelatihan JOIN KategoriPelatihan ktp ON kp.IDKategoriPelatihan = ktp.IDKategoriPelatihan JOIN BentukPelatihan bp ON kp.IDBentukPelatihan = bp.IDBentukPelatihan");


		return view('editKatalog')->with(['bentuk_pendidikan'=>$bentuk_pendidikan,'katalog_pendidikan'=>$katalog_pendidikan,'kategori_pendidikan'=>$kategori_pendidikan,'jenis_pendidikan'=>$jenis_pendidikan,'katalog'=>$katalog,'jenis'=>$jenis,'kategori'=>$kategori,'bentuk'=>$bentuk,'id'=>$id]);
	}

	public function editDone(Request $req,$id){
		$bentuk_pendidikan = $req['bentuk_pendidikan'];
		$katalog_pendidikan = $req['katalog_pendidikan'];
		$kategori_pendidikan = $req['kategori_pendidikan'];
		$jenis_pendidikan = $req['jenis_pendidikan'];


		$bentuk_pendidikan = substr($bentuk_pendidikan,0,2);
		$kategori_pendidikan = substr($kategori_pendidikan,0,1);
		$jenis_pendidikan = substr($jenis_pendidikan,0,2);

		$bentuk_pendidikan = (int)$bentuk_pendidikan;
		$kategori_pendidikan = (int)$kategori_pendidikan;
		$jenis_pendidikan = (int)$jenis_pendidikan;

		$id=(int)$id;


		DB::update('UPDATE KATALOGPELATIHAN SET NamaKatalog = ?, IDBentukPelatihan = ?, IDKategoriPelatihan = ?, IDJenisPelatihan = ? WHERE IDPelatihan = ?',array($katalog_pendidikan,$bentuk_pendidikan,$kategori_pendidikan,$jenis_pendidikan,$id));

		$katalog = DB::select('SELECT * FROM KATALOGPELATIHAN');

		return redirect('katalog')->with(['katalog'=>$katalog]);
	}

	public function delete(Request $req){
		$id = $req['hapus'];
		$query = DB::table('KATALOGPELATIHAN')->where('IDPelatihan','=',$id)->delete();
		
		return \Redirect::back();
	}

	public function view(Request $req){
		$role = $req['role'];

		$jenis = DB::select("SELECT JenisPelatihan=CAST(IDJenisPelatihan AS VARCHAR)+' '+JenisPelatihan FROM JENISPELATIHAN");
		$kategori = DB::select("SELECT KategoriPelatihan=CAST(IDKategoriPelatihan AS VARCHAR)+' '+KategoriPelatihan FROM KATEGORIPELATIHAN");
		$bentuk = DB::select("SELECT BentukPelatihan=CAST(IDBentukPelatihan AS VARCHAR)+' '+BENTUKPELATIHAN FROM BENTUKPELATIHAN");
		$katalog = DB::select("SELECT * FROM KATALOGPELATIHAN kp JOIN JenisPelatihan jp ON kp.IDJenisPelatihan = jp.IDJenisPelatihan JOIN KategoriPelatihan ktp ON kp.IDKategoriPelatihan = ktp.IDKategoriPelatihan JOIN BentukPelatihan bp ON kp.IDBentukPelatihan = bp.IDBentukPelatihan");
		return view('katalog')->with(['role'=>$role,'katalog'=>$katalog,'bentuk'=>$bentuk,'jenis'=>$jenis,'kategori'=>$kategori]);
	}
}