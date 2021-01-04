<?php namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{
		echo view('_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('admin');
		echo view('/_partials/footer');
		// return view('dashboard');
	}
}