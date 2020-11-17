<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	protected $model;

	public function __construct()
	{
		$this->model = new UserModel();
	}
	// Home view
	public function index()
	{
		$data["berita"] = $this->model->db->table("berita")->get()->getResultArray();
		echo view('templates/header');
		echo view('home', $data);
		echo view('templates/footer');
	}
}
