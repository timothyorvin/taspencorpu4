<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ControllerJenis extends Controller
{
	public function add(Request $req){
		$jenis_pendidikan = $req['jenis_pendidikan1'];
		$singkatan = $req['singkatan1'];

		$pelatihan = DB::select('SELECT * FROM JENISPELATIHAN');

		DB::table('JENISPELATIHAN')->insert(['JenisPelatihan'=>$jenis_pendidikan,'singkatan'=>$singkatan]);

		return \Redirect::back();
	}

	public function edit(Request $req,$id){
		$jenis_pendidikan = $req['jenis_pendidikan'];
		$singkatan = $req['singkatan'];
		return view('editJenis')->with(['singkatan'=>$singkatan,'jenis_pendidikan'=>$jenis_pendidikan,'id'=>$id]);
	}

	public function editDone(Request $req,$id){
		$jenis_pendidikan = $req['jenis_pendidikan'];
		$singkatan = $req['singkatan'];
		DB::update('UPDATE JENISPELATIHAN SET JenisPelatihan = ?, Singkatan = ? WHERE IDJenisPelatihan = ?',array($jenis_pendidikan,$singkatan,$id));

		$pelatihan = DB::select('SELECT * FROM JENISPELATIHAN');

		return redirect('jenis')->with(['pelatihan'=>$pelatihan]);
	}

	public function delete(Request $req){
		$id = $req['hapus'];
		$query = DB::table('JENISPELATIHAN')->where('IDJenisPelatihan','=',$id)->delete();
		$pelatihan = DB::select('SELECT * FROM JENISPELATIHAN');
		return \Redirect::back();
	}

	public function view(){
		$pelatihan = DB::select('SELECT * FROM JENISPELATIHAN');
		return view('jenis')->with(['pelatihan'=>$pelatihan]);
	}
}