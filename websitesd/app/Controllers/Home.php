<?php namespace App\Controllers;

class Home extends BaseController
{

	// Home view
	public function index()
	{
		echo view('templates/header');
		echo view('home');
		echo view('templates/footer');
	}


}
