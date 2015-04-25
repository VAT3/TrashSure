<?php 
namespace App\Http\Controllers;
use Request;
use App\TPA;
use App\TPS;
use App\Sarana;
use App\Petugas;

	class DelController extends Controller {
		public function DelTPA($id){
			$tpa = TPA::find($id);
			$tpa->delete();
			return redirect('inventory');	
		}

		public function DelTPS($id){
			$tps = TPS::find($id);
			$tps->delete();
			return redirect('inventory');	
		}

		public function DelSarana($id){
			$sarana = Sarana::find($id);
			$sarana->delete();
			return redirect('inventory');	
		}

		public function DelPetugas($id){
			$petugas = Petugas::find($id);
			$petugas->delete();
			return redirect('inventory');	
		}
	}
?>