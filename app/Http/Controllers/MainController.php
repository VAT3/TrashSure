<?php namespace App\Http\Controllers;
	class MainController extends Controller {
		public function index()
		{
			return view('overview');
		}
		public function inventory()
		{
			return view('inventory');
		}
	}
?>