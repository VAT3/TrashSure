<?php 
namespace App\Http\Controllers;
use Request;
use App\TPA;

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
	}
?>