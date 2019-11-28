<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


use App\ModelUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class ControllerUser extends Controller
{

    public function index(){
        // if(!Session::get('login')){
        //     return redirect('login')->with('alert','Anda harus login terlebih dahulu');
        // }
        // else{
        //     return view('welcome');
        // }
        if(!Session::get('login')){
        	return redirect('login')->with('alert','Anda harus login terlebih dahulu');
        }else{
        	$query1 = DB::select('SELECT COUNT(*) AS Jml FROM EVENTPELATIHAN WHERE [Status] = 0 GROUP BY [Status]
union all
SELECT 0 WHERE  NOT EXISTS(SELECT [Status] FROM EVENTPELATIHAN WHERE [Status]=0)');
			$query2 = DB::select('SELECT COUNT(*) AS Jml FROM EVENTPELATIHAN WHERE [Status] = 1 GROUP BY [Status]
union all
SELECT 0 WHERE  NOT EXISTS(SELECT [Status] FROM EVENTPELATIHAN WHERE [Status]=1)');
			$query3 = DB::select('SELECT COUNT(*) AS Jml FROM EVENTPELATIHAN WHERE [Status] = 2 GROUP BY [Status]
union all
SELECT 0 WHERE  NOT EXISTS(SELECT [Status] FROM EVENTPELATIHAN WHERE [Status]=2)');

			return view('welcome')->with(['query1'=>$query1,'query2'=>$query2,'query3'=>$query3]);	
        }
        
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $req){

        $email = $req['email'];
        $password = $req['password'];
        

        $data = ModelUser::where('email',$email)->first();
        
        if($data){
            if($password == $data->password){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('role',$data->role);
                Session::put('login',TRUE);
                return redirect('welcome');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Anda sudah logout');
    }
}
