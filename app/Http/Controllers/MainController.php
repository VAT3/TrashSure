<?php 
namespace App\Http\Controllers;
use App\TPA;
use App\TPS;
use App\Sarana;
use App\Petugas;
	class MainController extends Controller {
		public function index()
		{
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Sarana = Sarana::all();
			$Petugas = Petugas::all();
			return view('overview')->with('TPA', $TPA)->with('TPS', $TPS)->with('Sarana', $Sarana)->with('Petugas', $Petugas);
		}
		public function inventory()
		{
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Sarana = Sarana::all();
			$Petugas = Petugas::all();
			return view('inventory')->with('TPA', $TPA)->with('TPS', $TPS)->with('Sarana', $Sarana)->with('Petugas', $Petugas);
		}
	}
?>