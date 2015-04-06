<?php 
namespace App\Http\Controllers;
use Request;
use App\TPA;
use App\TPS;
use App\Sarana;
use App\Petugas;

	class AddController extends Controller {
		public function getAddTPA()
		{
			return view('formAddTPA');
		}
		public function postAddTPA()
		{
			$input = Request::all();
			// return response($input);
			$tpa = new TPA();
			$tpa->fill($input)->save();
			return redirect('inventory');
		}

		public function getAddTPS()
		{
			return view('formAddTPS');
		}
		public function postAddTPS()
		{
			$input = Request::all();
			// return response($input);
			$tps = new TPS();
			$tps->fill($input)->save();
			return redirect('inventory');
		}

		public function getAddSarana()
		{
			return view('formAddSarana');
		}
		public function postAddSarana()
		{
			$input = Request::all();
			// return response($input);
			$sarana = new Sarana();
			$sarana->fill($input)->save();
			return redirect('inventory');
		}

		public function getAddPetugas()
		{
			return view('formAddPetugas');
		}
		public function postAddPetugas()
		{
			$input = Request::all();
			// return response($input);
			$petugas = new Petugas();
			$petugas->fill($input)->save();
			return redirect('inventory');
		}
	}
?>