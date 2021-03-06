<?php 
namespace App\Http\Controllers;
use App\TPA;
use App\TPS;
use App\Sarana;
use App\Petugas;
use App\Jadwal;
use App\Quotation;
use Carbon\Carbon;
use DB;
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
		public function getIsiVolume() {
			$tpa = DB::select('SELECT * from tpa');
			$tps = DB::select('SELECT * from tps');
			return view('formIsiVolume')->with('tpa', $tpa)->with('tps', $tps);
		}
		public function postIsiVolume() {
			$input = Request::get("lokasi");
			$volume = Request::get("volume");
			$tempat = 'tps';
			/* Cek TPA atau TPS beserta voluemnya */
			if (sizeof($hasil = (DB::select('SELECT volume from tpa WHERE nama = ?', [$input]))) != 0) {
				$tempat = 'tpa';
			}
			else {
				$hasil = (DB::select('SELECT volume from tps WHERE nama = ?', [$input]));
			}

			$volume = $volume + $hasil[0]->volume;

			DB::table($tempat)
				-> where ('nama', $input)
				-> update (['volume' => $volume]);
			$tpa = DB::select('SELECT * from tpa');
			$tps = DB::select('SELECT * from tps');
			return view('formIsiVolume')->with('tpa', $tpa)->with('tps', $tps);
		}
		public function laporan(){
			return view('laporan');
		}
		public function getPenjadwalanSarana() {
			$tpa = DB::select('SELECT * from tpa');
			$tps = DB::select('SELECT * from tps');
			$sarana = DB::select('SELECT * from sarana');
			return view('formIsiVolume')->with('tpa', $tpa)->with('tps', $tps)->with('sarana', $sarana);
		}
		public function postPenjadwalanSarana() {
			$jenis = Request::get("jenis");
			$plat = Request::get("plat");
			$jadwal = Request::get("jadwal");
			$tempat = 'tps';
			/* Cek TPA atau TPS beserta voluemnya */
			if (sizeof($hasil = (DB::select('SELECT volume from tpa WHERE nama = ?', [$input]))) != 0) {
				$tempat = 'tpa';
			}
			
			DB::table('jadwal_pengangkutan')->insert(array(
			    array('jenis' => $jenis, 'plat' => $plat, 'jadwal' => $jadwal, 'tempat' => $tempat)
			));
			//return
			$tpa = DB::select('SELECT * from tpa');
			$tps = DB::select('SELECT * from tps');
			$sarana = DB::select('SELECT * from sarana');
			return view('formIsiVolume')->with('tpa', $tpa)->with('tps', $tps)->with('sarana', $sarana);
		}
	}
?>