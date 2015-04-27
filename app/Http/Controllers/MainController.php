<?php 
namespace App\Http\Controllers;
use App\TPA;
use App\TPS;
use App\Sarana;
use App\Petugas;
use App\Jadwal;
use Carbon\Carbon;
use Request;
	class MainController extends Controller {
		public function __construct()
		{
			$this->middleware('login', ['except' => ['index']]);
		}
		public function index()
		{
			return view('login');
		}
		public function home(){
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Sarana = Sarana::all();
			$Petugas = Petugas::all();
			return view('overview')->with('TPA', $TPA)->with('TPS', $TPS)->with('Sarana', $Sarana)->with('Petugas', $Petugas);
		}
		public function inventoryTPA()
		{
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Sarana = Sarana::all();
			$Petugas = Petugas::all();
			return view('inventoryTPA')->with('TPA', $TPA)->with('TPS', $TPS)->with('Sarana', $Sarana)->with('Petugas', $Petugas);
		}
		public function inventoryTPS()
		{
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Sarana = Sarana::all();
			$Petugas = Petugas::all();
			return view('inventoryTPS')->with('TPA', $TPA)->with('TPS', $TPS)->with('Sarana', $Sarana)->with('Petugas', $Petugas);
		}
		public function inventorySarana()
		{
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Sarana = Sarana::all();
			$Petugas = Petugas::all();
			return view('inventorySarana')->with('TPA', $TPA)->with('TPS', $TPS)->with('Sarana', $Sarana)->with('Petugas', $Petugas);
		}
		public function inventoryPetugas()
		{
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Sarana = Sarana::all();
			$Petugas = Petugas::all();
			return view('inventoryPetugas')->with('TPA', $TPA)->with('TPS', $TPS)->with('Sarana', $Sarana)->with('Petugas', $Petugas);
		}
		public function schedule(){
			$Petugas = Petugas::all();
			$TPA = TPA::all();
			$TPS = TPS::all();
			$mytime = Carbon::now()->addDay()->toDateString();
			return view('schedule')->with('Date', $mytime)->with('Petugas', $Petugas)->with('TPA', $TPA)->with('TPS', $TPS);
		}
		public function postAssignSchedule(){
			$input = Request::all();
			$jadwal = new Jadwal();
			$jadwal->fill($input)->save();

			$mytime = Carbon::now()->addDay()->toDateString();
			$Petugas = Petugas::all();
			$TPA = TPA::all();
			$TPS = TPS::all();
			return view('schedule')->with('Date', $mytime)->with('Petugas', $Petugas)->with('TPA', $TPA)->with('TPS', $TPS);
			 // return response($input);
			// return view('login');
		}
		public function viewSchedule(){
			$Petugas = Petugas::all();
			$TPA = TPA::all();
			$TPS = TPS::all();
			$Jadwal = Jadwal::all();
			$mytime = Carbon::now()->addDay()->toDateString();
			return view('viewSchedule')->with('Jadwal', $Jadwal)->with('Date', $mytime)->with('Petugas', $Petugas)->with('TPA', $TPA)->with('TPS', $TPS);
		}
	}
?>