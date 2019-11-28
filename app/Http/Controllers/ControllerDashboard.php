<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\File;


class ControllerDashboard extends Controller
{
	public function getDataAnggaran(){
		$anggaran1 = DB::select('SELECT Assigned, Anggaran, Presentase=ROUND(CAST(Assigned AS DECIMAL(35,1))/CAST(Anggaran AS DECIMAL(35,1))*100,2) FROM Anggaran WHERE GLAccount = ?',array('612306101'));
		$anggaran2 = DB::select('SELECT Assigned, Anggaran,Presentase=ROUND(CAST(Assigned AS DECIMAL(35,1))/CAST(Anggaran AS DECIMAL(35,1))*100,2) FROM Anggaran WHERE GLAccount = ?',array('612306102'));
		$anggaran3 = DB::select('SELECT Assigned, Anggaran,Presentase=ROUND(CAST(Assigned AS DECIMAL(35,1))/CAST(Anggaran AS DECIMAL(35,1))*100,2) FROM Anggaran WHERE GLAccount = ?',array('612306103'));
		$anggaran4 = DB::select('SELECT Assigned, Anggaran,Presentase=ROUND(CAST(Assigned AS DECIMAL(35,1))/CAST(Anggaran AS DECIMAL(35,1))*100,2) FROM Anggaran WHERE GLAccount = ?',array('612306104'));

		return view('penyerapan')->with(['anggaran1'=>$anggaran1,'anggaran2'=>$anggaran2,'anggaran3'=>$anggaran3,'anggaran4'=>$anggaran4]);
	}

	public function getDataPelaksanaan(){
		$jenis = DB::select('SELECT JenisPelatihan, COUNT(*) AS Jml
FROM EVENTPELATIHAN e JOIN KATALOGPELATIHAN kt
ON e.IDPelatihan = kt.IDPelatihan JOIN JENISPELATIHAN j
ON kt.IDJenisPelatihan = j.IDJenisPelatihan
GROUP BY JenisPelatihan');

		$bentuk = DB::select('SELECT BentukPelatihan, COUNT(*) AS Jml
FROM EVENTPELATIHAN e JOIN KATALOGPELATIHAN kt
ON e.IDPelatihan = kt.IDPelatihan JOIN BENTUKPELATIHAN b
ON kt.IDBentukPelatihan = b.IDBentukPelatihan
GROUP BY BentukPelatihan');

		$kategori = DB::select('SELECT KategoriPelatihan, COUNT(*) AS Jml
FROM EVENTPELATIHAN e JOIN KATALOGPELATIHAN kt
ON e.IDPelatihan = kt.IDPelatihan JOIN KATEGORIPELATIHAN k
ON kt.IDKategoriPelatihan = k.IDKategoriPelatihan
GROUP BY KategoriPelatihan');

		$kt = DB::select('
SELECT NamaKatalog, COUNT(DISTINCT NIKUser) AS Jml
FROM EVENTPELATIHAN ep LEFT JOIN DETAILEVENTPELATIHAN dep ON ep.IDEventPelatihan = dep.IDEventPelatihan LEFT JOIN KATALOGPELATIHAN kp ON ep.IDPelatihan = kp.IDPelatihan 
 GROUP BY NamaKatalog ORDER BY COUNT(DISTINCT NIKUser) DESC');

		$ev = DB::select('SELECT ep.IDEventPelatihan, NamaEventPelatihan, COUNT(DISTINCT NIKUser) AS Jml
FROM EVENTPELATIHAN ep LEFT JOIN DETAILEVENTPELATIHAN dep ON ep.IDEventPelatihan = dep.IDEventPelatihan
 GROUP BY ep.IDEventPelatihan, NamaEventPelatihan ORDER BY COUNT(DISTINCT NIKUser) DESC');

		return response()->json(['kt'=>$kt,'ev'=>$ev,'jenis'=>$jenis,'bentuk'=>$bentuk,'kategori'=>$kategori]);
	}
}