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

		public function formAmazeui(){
			return view('Index.form-amazeui');
		}

		public function formLine(){
			return view('Index.form-line');
		}

		public function formNewsList(){
			return view('Index.form-news-list');
		}

		public function formNews(){
			return view('Index.form-news');
		}

		public function login(){
			return view('Index.login');
		}

		public function tableFontList(){
			return view('Index.table-font-list');
		}

		public function tableImagesList(){
			return view('Index.table-images-list');
		}

	}

 ?>