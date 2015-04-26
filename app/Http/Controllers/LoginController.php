<?php 
namespace App\Http\Controllers;
use DB;
use Session;
use Input;
use App\Quotation;

class LoginController extends Controller {
	public function login(){
		$username = Input::get('username');
		$password = Input::get('password');
		
		$user = DB::table('Petugas')->where('username',$username)->first();
		if($user != NULL){
			if( $user->password == $password){
				Session::put('username',$user->username);
				Session::put('pekerjaan',$user->pekerjaan);
				Session::put('name',$user->nama);
				return redirect('TrashSure');
			}else{
				Session::put('notification','Password yang Anda masukkan salah');
				return redirect('index');
			}
		}else{
			Session::put('notification','Informasi yang Anda berikan tidak ada dalam database');
			return redirect('index');
		}
	}
}
