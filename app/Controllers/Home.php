<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('dashboard');
		echo view('/_partials/footer');
		// return view('dashboard');
	}

	public function detail(){
		echo view('_partials/head');
		echo view('/_partials/navbar');
		echo view('detail/kenzo');
		echo view('timer');
		echo view('/_partials/footer');
	}

	public function bayar(){
		echo view('_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('pembayaran');
		echo view('/_partials/footer');
	}

	public function admin()
	{
		echo view('_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('admin');
		echo view('/_partials/footer');
		// return view('dashboard');
	}

	public function sweater()
	{
		echo view('/_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('/kategori/sweater');
		echo view('/_partials/footer');
		// return view('dashboard');
	}

	public function jacket()
	{
		echo view('/_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('/kategori/jacket');
		echo view('/_partials/footer');
		// return view('dashboard');
	}

	public function check()
	{
		echo view('/_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('/checkout');
		echo view('/_partials/footer');
	}
	public function cart()
	{
		echo view('/_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('/cart');
		echo view('/_partials/footer');
	}

	public function invoice()
	{
		echo view('/_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('/pembayaran');
		echo view('/_partials/footer');
	}

	public function struct()
	{
		echo view('/_partials/head');
		echo view('/_partials/sidebar');
		echo view('/_partials/navbar');
		echo view('/invoice');
		echo view('/_partials/footer');
	}
}
