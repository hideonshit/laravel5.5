<?php 

	namespace App\Http\Controllers\Index;

	use App\Http\Controllers\Controller;

	class IndexController extends Controller{

		public function index(){
			return view('Index.index');
		}

		public function chart(){
			return view('Index.chart');
		}

		public function calendar(){
			return view('Index.calendar');
		}

		public function form(){
			return view('Index.form');
		}

		public function login(){
			return view('Index.login');
		}

		public function signUp(){
			return view('Index.sign-up');
		}

		public function tableListImg(){
			return view('Index.table-list-img');
		}

		public function tableList(){
			return view('Index.table-list');
		}

		public function table(){
			return view('Index.tables');
		}

	}

 ?>