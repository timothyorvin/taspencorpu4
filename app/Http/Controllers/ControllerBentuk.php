<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class ControllerBentuk extends Controller
{
	public function add(){
		$bentuk_pendidikan = $_GET['bentuk_pendidikan'];

		$bentuk = DB::select('SELECT * FROM BENTUKPELATIHAN');

		DB::table('BENTUKPELATIHAN')->insert(['BentukPelatihan'=>$bentuk_pendidikan]);

		return \Redirect::back();
	}

	public function edit(Request $req,$id){
		$bentuk_pendidikan = $req['bentuk_pendidikan'];
		
		return view('editBentuk')->with(['bentuk_pendidikan'=>$bentuk_pendidikan,'id'=>$id]);
	}

	public function editDone(Request $req,$id){
		$bentuk_pendidikan = $req['bentuk_pendidikan'];
		DB::update('UPDATE BENTUKPELATIHAN SET BentukPelatihan = ? WHERE IDBentukPelatihan = ?',array(
			$bentuk_pendidikan,$id));		
		$bentuk = DB::select('SELECT * FROM BENTUKPELATIHAN');
		return redirect('bentuk')->with(['bentuk'=>$bentuk]);
	}

	public function delete(Request $req){
		$id = $req['hapus'];
		$query = DB::table('BENTUKPELATIHAN')->where('IDBentukPelatihan','=',$id)->delete();
		$bentuk = DB::select('SELECT * FROM BENTUKPELATIHAN');
		return \Redirect::back();
	}

	public function view(){
		$bentuk = DB::select('SELECT * FROM BENTUKPELATIHAN');
		return view('bentuk')->with(['bentuk'=>$bentuk]);
	}
}