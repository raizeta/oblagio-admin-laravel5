<?php namespace App\Http\Controllers\admin\controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DefaultController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->judul_menu = 'Default';
	}
	public function index()
	{
		$parameters = [
			'judul_menu' => $this->judul_menu , 
			'judul_action_menu' => 'Index'
		];

		return view('admin.default.index' , $parameters);
	}
}
