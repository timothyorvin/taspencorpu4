<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;


class ControllerEvent extends Controller
{
	public function add(){
		$event_pelatihan = $_GET['event_pelatihan'];
		$katalog_pendidikan = $_GET['katalog_pendidikan'];
		$date_start = $_GET['date_start'];
		$date_end = $_GET['date_end'];
		$provider = $_GET['provider'];
		$NIK = $_GET['NIK'];
		$tempat = $_GET['tempat'];
		$GLAccount = $_GET['GLAccount'];
		$biaya_pendidikan = $_GET['biaya_pendidikan'];
		$iobudgeting= $_GET['IOBudgeting'];
		// $jumlah_peserta = $_GET['jumlah_peserta'];
		// $jumlah_fasilitator = $_GET['jumlah_fasilitator'];
		$status = 0;

		$katalog_pendidikan = substr($katalog_pendidikan,0,2);
		$katalog_pendidikan = (int)$katalog_pendidikan;

		$GLAccount = substr($GLAccount, 0,9);

		DB::table('EventPelatihan')->insert(['IDPelatihan'=>$katalog_pendidikan,'NIK'=>$NIK,'TglMulaiEvent'=>$date_start,'TglAkhirEvent'=>$date_end,'NamaEventPelatihan'=>$event_pelatihan,'GLAccount'=>$GLAccount,'Provider'=>$provider,'Tempat'=>$tempat,'JenisAccount'=>'1','KeteranganIOBudgeting'=>$iobudgeting,'BiayaPelatihan'=>$biaya_pendidikan,'status'=>$status]);



		return \Redirect::back();
	}

	public function edit(Request $req,$id){
		$event_pelatihan = $req['event_pelatihan'];
		$katalog_pendidikan = $req['katalog_pendidikan'];
		$date_start = $req['date_start'];
		$date_end = $req['date_end'];
		$provider = $req['provider'];
		$NIK = $req['NIK'];
		$tempat = $req['tempat'];
		$GLAccount = $req['GLAccount'];
		$biaya_pendidikan = $req['biaya_pendidikan'];
		$iobudgeting= $req['IOBudgeting'];
		// $jumlah_peserta = $req['jumlah_peserta'];
		// $jumlah_fasilitator = $req['jumlah_fasilitator'];
		$status = 0;

		$katalog = DB::select("SELECT KatalogPelatihan=CAST(IDPelatihan AS VARCHAR)+' '+NamaKatalog FROM KATALOGPELATIHAN");

		$event = DB::select("SELECT * FROM EVENTPELATIHAN WHERE IDEventPelatihan=?",array($id));


		return view('editEvent')->with(['event'=>$event,'katalog'=>$katalog,'id'=>$id,'event_pelatihan'=>$event_pelatihan,'katalog_pendidikan'=>$katalog_pendidikan,'date_start'=>$date_start,'date_end'=>$date_end,'provider'=>$provider,'NIK'=>$NIK,'tempat'=>$tempat,'GLAccount'=>$GLAccount,'biaya_pendidikan'=>$biaya_pendidikan,'iobudgeting'=>$iobudgeting,'status'=>$status]);
	}

	public function editDone(Request $req,$id){
		$event_pelatihan = $req['event_pelatihan'];
		$katalog_pendidikan = $req['katalog_pendidikan'];
		$date_start = $req['date_start'];
		$date_end = $req['date_end'];
		$provider = $req['provider'];
		$NIK = '000000000001';
		$tempat = $req['tempat'];
		$GLAccount = $req['GLAccount'];
		$biaya_pendidikan = $req['biaya_pendidikan'];
		$iobudgeting= $req['IOBudgeting'];
		// $jumlah_peserta = $req['jumlah_peserta'];
		// $jumlah_fasilitator = $req['jumlah_fasilitator'];

		$katalog_pendidikan = substr($katalog_pendidikan,0,2);
		$katalog_pendidikan = (int)$katalog_pendidikan;

		$GLAccount = substr($GLAccount, 0,9);

		$id=(int)$id;


		DB::update('UPDATE EVENTPELATIHAN SET IDPelatihan = ?,NIK = ?, TglMulaiEvent = ?, TglAkhirEvent = ?, NamaEventPelatihan = ?, GLAccount = ?, Provider = ?, Tempat = ?, JenisAccount = ?, KeteranganIOBudgeting = ?, BiayaPelatihan = ? WHERE IDEventPelatihan = ?',array($katalog_pendidikan,$NIK,$date_start,$date_end,$event_pelatihan,$GLAccount,$provider,$tempat,'1',$iobudgeting,$biaya_pendidikan,$id));

		$event = DB::select('SELECT * FROM EVENTPELATIHAN');

		return redirect('event')->with(['event'=>$event]);
	}
	
	public function feedbackfasilitator(Request $req,$id,$id1){
		return view('feedbackFasilitator')->with(['id'=>$id,'id1'=>$id1]);
	}

	public function feedbackdone(Request $req,$id,$id1){
		$ket = $req['feedback_fasilitator'];
		DB::update("UPDATE FEEDBACKFASILITATOR SET Keterangan = ? WHERE IDEventPelatihan = ? AND NIK = ?",array($ket,$id,$id1));
		$display = DB::select("
SELECT DISTINCT up.NIK, Nama, ff.Keterangan FROM USERPELATIHAN up JOIN FEEDBACKFASILITATOR ff ON up.NIK=ff.NIK JOIN EVENTPELATIHAN ep ON ff.IDEventPelatihan = ep.IDEventPelatihan
WHERE ff.IDEventPelatihan=?",array($id));
		$displayf = DB::select("
SELECT DISTINCT up.NIK, Nama, ff.Keterangan FROM USERPELATIHAN up JOIN FEEDBACKFASILITATOR ff ON up.NIK=ff.NIK JOIN EVENTPELATIHAN ep ON ff.IDEventPelatihan = ep.IDEventPelatihan
WHERE ff.IDEventPelatihan=?",array($id));
		return redirect('displaypeserta/'.$id)->with(['id'=>$id,'display'=>$display,'displayf'=>$displayf]);

	}

	public function nilaipeserta($id,$id1){
		return view('nilaipeserta')->with(['id'=>$id,'id1'=>$id1]);
	}

	public function nilaiDone(Request $req,$id,$id1){
		$ket1 = $req['nilai_peserta'];
		

		DB::update('UPDATE NILAIPESERTA SET Nilai = ? WHERE IDEventPelatihan = ? AND NIK = ?',array($ket1,$id,$id1));

		$display = DB::select("SELECT DISTINCT up.NIK, Nama, Golongan, UnitKerja, Gender, BiayaSPPD, np.Nilai FROM USERPELATIHAN up JOIN NILAIPESERTA np ON up.NIK=np.NIK JOIN EVENTPELATIHAN ep ON np.IDEventPelatihan = ep.IDEventPelatihan WHERE np.IDEventPelatihan=?",array($id));
		
		return redirect('displaypeserta/'.$id)->with(['display'=>$display,'id'=>$id]);
	}

	public function view(){
		$event = DB::select('SELECT ep.IDEventPelatihan, ep.IDPelatihan, NIK, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, JmlPeserta=COUNT(DISTINCT NIKUser),JmlFasilitator=COUNT(DISTINCT NIKFasilitator) FROM EventPelatihan ep LEFT JOIN DetailEventPelatihan dep ON ep.IDEventPelatihan=dep.IDEventPelatihan GROUP BY ep.IDEventPelatihan, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, ep.IDPelatihan, NIK');

		// $event = DB::select('SELECT * FROM EventPelatihan');

		$nilai = DB::select('SELECT * FROM NILAIPESERTA');

		
		$katalog = DB::select("SELECT KatalogPelatihan=CAST(IDPelatihan AS VARCHAR)+' '+NamaKatalog FROM KATALOGPELATIHAN");
		return view('event')->with(['event'=>$event,'katalog'=>$katalog,'nilai'=>$nilai]);
	}

	public function displaypeserta(Request $req, $id){
		$display = DB::select("
SELECT DISTINCT up.NIK, Nama, Golongan, UnitKerja, Gender, BiayaSPPD, np.Nilai FROM USERPELATIHAN up JOIN NILAIPESERTA np ON up.NIK=np.NIK JOIN EVENTPELATIHAN ep ON np.IDEventPelatihan = ep.IDEventPelatihan
WHERE np.IDEventPelatihan=?",array($id));
		$displayf = DB::select("
SELECT DISTINCT up.NIK, Nama, ff.Keterangan FROM USERPELATIHAN up JOIN FEEDBACKFASILITATOR ff ON up.NIK=ff.NIK JOIN EVENTPELATIHAN ep ON ff.IDEventPelatihan = ep.IDEventPelatihan
WHERE ff.IDEventPelatihan=?",array($id));

		return view('displaypeserta')->with(['display'=>$display,'id'=>$id,'displayf'=>$displayf]);
	}

	public function displayfasilitator(Request $req, $id){
		$display = DB::select("
SELECT DISTINCT up.NIK, Nama, ff.Keterangan FROM USERPELATIHAN up JOIN FEEDBACKFASILITATOR ff ON up.NIK=ff.NIK JOIN EVENTPELATIHAN ep ON ff.IDEventPelatihan = ep.IDEventPelatihan
WHERE ff.IDEventPelatihan=?",array($id));
		return view('displayfasilitator')->with(['display'=>$display,'id'=>$id]);
	}

	public function upload(Request $req, $id){
		$materi = DB::select('SELECT * FROM MATERIPELATIHAN WHERE IDEventPelatihan = ?',array($id));
		return view('upload')->with(['id'=>$id,'materi'=>$materi]);
	}

	public function view2(Request $req, $id){
		$file = $_FILES['upload'];

    	$ext = pathInfo($file['name'], PATHINFO_EXTENSION);

    	$content = File::get($file['tmp_name']);

    	$path = $file['name'];

    	$nilai = DB::select('SELECT * FROM NILAIPESERTA');

    	if(Storage::put('public/'.$path, $content)){
			$materi = DB::table('MATERIPELATIHAN')->insert(['LinkMateri'=>$path,'IDEventPelatihan'=>$id]);
		}
		$event = DB::select('SELECT ep.IDEventPelatihan, ep.IDPelatihan, NIK, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, JmlPeserta=COUNT(DISTINCT NIKUser),JmlFasilitator=COUNT(DISTINCT NIKFasilitator) FROM EventPelatihan ep LEFT JOIN DetailEventPelatihan dep ON ep.IDEventPelatihan=dep.IDEventPelatihan GROUP BY ep.IDEventPelatihan, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, ep.IDPelatihan, NIK');
		// $event = DB::select('SELECT * FROM EVENTPELATIHAN');

		$katalog = DB::select("SELECT KatalogPelatihan=CAST(IDPelatihan AS VARCHAR)+' '+NamaKatalog FROM KATALOGPELATIHAN");
		return view('event')->with(['event'=>$event,'katalog'=>$katalog,'nilai'=>$nilai]);	
	}

	public function viewAbsensi(Request $req, $id){
		$display = DB::select("SELECT DISTINCT a.NIK, Nama, Tanggal, Flag=CASE WHEN Flag=0 THEN 'N' ELSE 'P' END FROM ABSENSI a JOIN USERPELATIHAN u ON a.NIK = u.NIK WHERE IDEventPelatihan = ?",array($id));

		return view('displayabsensi')->with(['display'=>$display]);
	}

	public function absensi(Request $req, $id){
		$display = DB::select("SELECT DISTINCT a.NIK AS NIK, Nama, Tanggal FROM ABSENSI a JOIN USERPELATIHAN u ON a.NIK = u.NIK WHERE IDEventPelatihan = ?",array($id));

		return view('absensi')->with(['display'=>$display,'id'=>$id]);
	}

	public function absensiDone(Request $req, $id){
		$display = DB::select("SELECT DISTINCT a.NIK AS NIK, Nama, Tanggal FROM ABSENSI a JOIN USERPELATIHAN u ON a.NIK = u.NIK WHERE IDEventPelatihan = ?",array($id));

		DB::update('UPDATE ABSENSI SET Flag=? WHERE IDEventPelatihan = ?',array(1, $id));
		// foreach($checklist as $c){
		// 	$nik = substr($c,0,12);
		// 	$tgl = substr($c,12,10);
		// 	DB::update("UPDATE ABSENSI SET Flag = 1 WHERE NIK = ? AND CAST(Tanggal AS VARCHAR) = ? AND IDEventPelatihan = ?",array($nik, $tgl, $id));
		// }

		$event = DB::select('SELECT ep.IDEventPelatihan, ep.IDPelatihan, NIK, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, JmlPeserta=COUNT(DISTINCT NIKUser),JmlFasilitator=COUNT(DISTINCT NIKFasilitator) FROM EventPelatihan ep LEFT JOIN DetailEventPelatihan dep ON ep.IDEventPelatihan=dep.IDEventPelatihan GROUP BY ep.IDEventPelatihan, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, ep.IDPelatihan, NIK');

		return redirect('event')->with(['display'=>$display,'id'=>$id,'event'=>$event]);
	}

	public function tambahPeserta(Request $req, $id){
		// $loop = DB::select('SELECT COUNT(DISTINCT(b.NIKUser)) AS JmlPeserta FROM TaspenCorpu..EventPelatihan a JOIN TaspenCorpu..DETAILEVENTPELATIHAN b ON a.IDEventPelatihan = b.IDEventPelatihan WHERE a.IDEventPelatihan = ?',array($id));
		// $loop_fas = DB::select('SELECT COUNT(DISTINCT(b.NIKFasilitator)) AS JmlFas FROM TaspenCorpu..EventPelatihan a JOIN TaspenCorpu..DETAILEVENTPELATIHAN b ON a.IDEventPelatihan = b.IDEventPelatihan WHERE a.IDEventPelatihan = ?',array($id));
		$loop_pes = DB::select('SELECT JumlahPeserta AS JmlPeserta FROM EVENTPELATIHAN WHERE IDEventPelatihan = ?',array($id));

		$loop_fas = DB::select('SELECT JumlahFasilitator AS JmlFas FROM EVENTPELATIHAN WHERE IDEventPelatihan = ?',array($id));
		
		$event = DB::select('SELECT ep.IDEventPelatihan, ep.IDPelatihan, NIK, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, JmlPeserta=COUNT(DISTINCT NIKUser),JmlFasilitator=COUNT(DISTINCT NIKFasilitator) FROM EventPelatihan ep LEFT JOIN DetailEventPelatihan dep ON ep.IDEventPelatihan=dep.IDEventPelatihan GROUP BY ep.IDEventPelatihan, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, ep.IDPelatihan, NIK');
		$peserta = DB::select('SELECT NIK, Nama FROM USERPELATIHAN');
		$fasilitator = DB::select('SELECT NIK, Nama FROM USERPELATIHAN');
		$i=0;
		return view('tambahpeserta')->with(['loop_pes'=>$loop_pes,'id'=>$id,'i'=>$i,'peserta'=>$peserta,'loop_fas'=>$loop_fas,'fasilitator'=>$fasilitator,'event'=>$event]);
	}

	public function tambahPesertaDone(){
		// for($i=0;$i<4;$i++){
		// 	for($j=0;$j<2;$j++){
		// 		DB::table('DETAILEVENTPELATIHAN')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$req['peserta'][$i],'NIKFasilitator'=>$req['fasilitator'][$j]]);
		// 	}
		// }

		// return \Redirect::back();

		$fasilitator1 = $_GET['fas1'];
		$fasilitator2 = $_GET['fas2'];
		$peserta1 = $_GET['pes1'];
		$peserta2 = $_GET['pes2'];
		$peserta3 = $_GET['pes3'];
		$peserta4 = $_GET['pes4'];
		$id = $_GET['ids'];
		$tglMulai = $_GET['tglMulai'];

		$event = DB::select('SELECT ep.IDEventPelatihan, ep.IDPelatihan, NIK, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, JmlPeserta=COUNT(DISTINCT NIKUser),JmlFasilitator=COUNT(DISTINCT NIKFasilitator) FROM EventPelatihan ep LEFT JOIN DetailEventPelatihan dep ON ep.IDEventPelatihan=dep.IDEventPelatihan GROUP BY ep.IDEventPelatihan, TglMulaiEvent, TglAkhirEvent, NamaEventPelatihan, GLAccount, Provider, Tempat, JenisAccount, KeteranganIOBudgeting, BiayaPelatihan, Status, ep.IDPelatihan, NIK');

		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta1,'NIKFasilitator'=>$fasilitator1]);
		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta1,'NIKFasilitator'=>$fasilitator2]);
		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta2,'NIKFasilitator'=>$fasilitator1]);
		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta2,'NIKFasilitator'=>$fasilitator2]);
		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta3,'NIKFasilitator'=>$fasilitator1]);
		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta3,'NIKFasilitator'=>$fasilitator2]);
		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta4,'NIKFasilitator'=>$fasilitator1]);
		DB::table('DetailEventPelatihan')->insert(['IDEventPelatihan'=>$id,'NIKUser'=>$peserta4,'NIKFasilitator'=>$fasilitator2]);

		DB::table('ABSENSI')->insert(['NIK'=>$peserta1,'Tanggal'=>$tglMulai,'Flag'=>0,'IDEventPelatihan'=>$id]);
		DB::table('ABSENSI')->insert(['NIK'=>$peserta2,'Tanggal'=>$tglMulai,'Flag'=>0,'IDEventPelatihan'=>$id]);
		DB::table('ABSENSI')->insert(['NIK'=>$peserta3,'Tanggal'=>$tglMulai,'Flag'=>0,'IDEventPelatihan'=>$id]);
		DB::table('ABSENSI')->insert(['NIK'=>$peserta4,'Tanggal'=>$tglMulai,'Flag'=>0,'IDEventPelatihan'=>$id]);

		DB::table('NILAIPESERTA')->insert(['NIK'=>$peserta1,'IDEventPelatihan'=>$id]);
		DB::table('NILAIPESERTA')->insert(['NIK'=>$peserta2,'IDEventPelatihan'=>$id]);
		DB::table('NILAIPESERTA')->insert(['NIK'=>$peserta3,'IDEventPelatihan'=>$id]);
		DB::table('NILAIPESERTA')->insert(['NIK'=>$peserta4,'IDEventPelatihan'=>$id]);

		DB::table('FEEDBACKFASILITATOR')->insert(['NIK'=>$fasilitator1,'IDEventPelatihan'=>$id]);
		DB::table('FEEDBACKFASILITATOR')->insert(['NIK'=>$fasilitator2,'IDEventPelatihan'=>$id]);

		$display = DB::select("SELECT DISTINCT up.NIK, Nama, Golongan, UnitKerja, Gender, BiayaSPPD, np.Nilai FROM USERPELATIHAN up JOIN NILAIPESERTA np ON up.NIK=np.NIK JOIN EVENTPELATIHAN ep ON np.IDEventPelatihan = ep.IDEventPelatihan WHERE np.IDEventPelatihan=?",array($id));

		return redirect('displaypeserta/'.$id)->with(['display'=>$display]);




	}

	public function getSummaryData(Request $req){
		$username = $req['username'];
		$password = $req['password'];
		$cekUser = DB::select('SELECT * FROM users');
		$flag = 0;

		foreach($cekUser as $c){
			if($c->email == $username && $c->password == $password){
				$name = $c->name;
				$role = $c->role;
				$flag = 1;
				break;
			}
		}

		if($flag == 1){
			$query1 = DB::select('SELECT COUNT(*) AS Jml FROM EVENTPELATIHAN WHERE [Status] = 0 GROUP BY [Status]
union all
SELECT 0 WHERE  NOT EXISTS(SELECT [Status] FROM EVENTPELATIHAN WHERE [Status]=0)');
			$query2 = DB::select('SELECT COUNT(*) AS Jml FROM EVENTPELATIHAN WHERE [Status] = 1 GROUP BY [Status]
union all
SELECT 0 WHERE  NOT EXISTS(SELECT [Status] FROM EVENTPELATIHAN WHERE [Status]=1)');
			$query3 = DB::select('SELECT COUNT(*) AS Jml FROM EVENTPELATIHAN WHERE [Status] = 2 GROUP BY [Status]
union all
SELECT 0 WHERE  NOT EXISTS(SELECT [Status] FROM EVENTPELATIHAN WHERE [Status]=2)');

			return view('welcome')->with(['username'=>$name,'role'=>$role,'query1'=>$query1,'query2'=>$query2,'query3'=>$query3]);
		}else{
			return redirect('/');
		}
	}

	// public function tambahFasilitator(Request $req, $id){
	// 	$loop = DB::select('SELECT COUNT(DISTINCT(b.NIKFasilitator)) AS JmlFas FROM TaspenCorpu..EventPelatihan a JOIN TaspenCorpu..DETAILEVENTPELATIHAN b ON a.IDEventPelatihan = b.IDEventPelatihan WHERE a.IDEventPelatihan = ?',array($id));
	// 	$fasilitator = DB::select('SELECT NIK, Nama FROM USERPELATIHAN');
	// 	$i=0;
	// 	return view('tambahfasilitator')->with(['loop'=>$loop,'id'=>$id,'i'=>$i,'fasilitator'=>$fasilitator]);
	// }

	public function delete(Request $req){
		$id = $req['hapus'];
		
		$q = DB::table('DETAILEVENTPELATIHAN')->where('IDEventPelatihan','=',$id)->delete();
		$query4 = DB::table('FASILITATOR')->where('IDEventPelatihan','=',$id)->delete();
		$query5 = DB::table('MATERIPELATIHAN')->where('IDEventPelatihan','=',$id)->delete();
		$query2 = DB::table('NILAIPESERTA')->where('IDEventPelatihan','=',$id)->delete();
		$query3 = DB::table('FEEDBACKFASILITATOR')->where('IDEventPelatihan','=',$id)->delete();
		$query6 = DB::table('ABSENSI')->where('IDEventPelatihan','=',$id)->delete();
		$query = DB::table('EVENTPELATIHAN')->where('IDEventPelatihan','=',$id)->delete();
		
		return \Redirect::back();
	}

	public function approval1(Request $req){
		$id = $req['approve1'];
		$query = DB::update('UPDATE EVENTPELATIHAN SET [Status] = ? WHERE IDEventPelatihan = ?',array(1,$id));

		return \Redirect::back();
	}

	public function approval2(Request $req){
		$id = $req['approve2'];
		$query = DB::update('UPDATE EVENTPELATIHAN SET [Status] = ? WHERE IDEventPelatihan = ?',array(2,$id));

		return \Redirect::back();
	}

	public function lihatnilai(Request $req,$id,$id1){
		$nilai = DB::select('SELECT * FROM NILAIPESERTA WHERE IDEventPelatihan = ? AND NIK = ?',array($id, $id1));
		return view('LihatNilaiPeserta')->with(['nilai'=>$nilai]);
	}

	public function lihatfeedback(Request $req,$id){
		$nilai = DB::select('SELECT * FROM FEEDBACKFASILITATOR WHERE IDEventPelatihan = ?',array($id));
		return view('LihatFeedback')->with(['nilai'=>$nilai]);
	}
}