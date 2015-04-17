<?php 
namespace App\Http\Controllers;
use Request;
use App\TPA;
use App\TPS;
use App\Sarana;
use App\Petugas;

	class UpdController extends Controller {
		public function getUpdTPA()
		{
			return view('formUpdPetugas');
		}
		public function postUpdTPA()
		{
			$input = Request::all();
			// return response($input);
			$tpa = new TPA();
			$tpa->fill($input)->save();
			return redirect('inventory');
		}

		public function getUpdTPS()
		{
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

		public function getUpdSarana()
		{
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

		public function getUpdPetugas()
		{
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