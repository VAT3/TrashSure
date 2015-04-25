<?php 
namespace App\Http\Controllers;
use Request;
use Session;
use App\TPA;
use App\TPS;
use App\Sarana;
use App\Petugas;

	class UpdController extends Controller {
		public function getUpdTPA($id)
		{
			$tpa = TPA::find($id);
			Session::put('namaTPA',$tpa->nama);
			Session::put('lokasiTPA',$tpa->lokasi);
			return view('formUpdTPA');
		}
		public function postUpdTPA()
		{
			$input = Request::all();
			// return response($input);
			$tpa = new TPA();
			$tpa->fill($input)->save();
			return redirect('inventory');
		}

		public function getUpdTPS($id)
		{
			$tps = TPS::find($id);
			Session::put('namaTPS',$tps->nama);
			Session::put('lokasiTPS',$tps->lokasi);
			return view('formUpdTPS');
		}
		public function postUpdTPS()
		{
			$input = Request::all();
			// return response($input);
			$tps = new TPS();
			$tps->fill($input)->save();
			return redirect('inventory');
		}

		public function getUpdSarana($id)
		{
			$sarana = Sarana::find($id);
			Session::put('jenisSarana',$sarana->jenis);
			Session::put('platSarana',$sarana->plat);
			return view('formUpdSarana');
		}
		public function postUpdSarana()
		{
			$input = Request::all();
			// return response($input);
			$sarana = new Sarana();
			$sarana->fill($input)->save();
			return redirect('inventory');
		}

		public function getUpdPetugas($id)
		{
			$petugas = Petugas::find($id);
			Session::put('namaPetugas',$petugas->nama);
			Session::put('NIP',$petugas->nip);
			Session::put('pekerjaan',$petugas->pekerjaan);
			Session::put('username',$petugas->username);
			
			return view('formUpdPetugas');
		}
		public function postUpdPetugas()
		{
			$input = Request::all();
			// return response($input);
			$petugas = new Petugas();
			$petugas->fill($input)->save();
			return redirect('inventory');
		}
	}
?>