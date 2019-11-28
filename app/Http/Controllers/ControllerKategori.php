<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ControllerKategori extends Controller
{
	public function add(){
		$kategori_pendidikan = $_GET['kategori_pendidikan'];

		$kategori = DB::select('SELECT * FROM KATEGORIPELATIHAN');

		DB::table('KATEGORIPELATIHAN')->insert(['KategoriPelatihan'=>$kategori_pendidikan]);

		return \Redirect::back();
	}

	public function edit(Request $req,$id){
		$kategori_pendidikan = $req['kategori_pendidikan'];
		
		return view('editKategori')->with(['kategori_pendidikan'=>$kategori_pendidikan,'id'=>$id]);
	}

	public function editDone(Request $req,$id){
		$kategori_pendidikan = $req['kategori_pendidikan'];

		DB::update('UPDATE KATEGORIPELATIHAN SET KategoriPelatihan = ? WHERE IDKategoriPelatihan = ?',array($kategori_pendidikan,$id));

		$kategori = DB::select('SELECT * FROM KATEGORIPELATIHAN');

		return redirect('kategori')->with(['kategori'=>$kategori]);
	}

	public function delete(Request $req){
		$id = $req['hapus'];
		$query = DB::table('KATEGORIPELATIHAN')->where('IDKategoriPelatihan','=',$id)->delete();
		$kategori = DB::select('SELECT * FROM KATEGORIPELATIHAN');
		return \Redirect::back();
	}

	public function view(){
		$kategori = DB::select('SELECT * FROM KATEGORIPELATIHAN');
		return view('kategori')->with(['kategori'=>$kategori]);
	}
}