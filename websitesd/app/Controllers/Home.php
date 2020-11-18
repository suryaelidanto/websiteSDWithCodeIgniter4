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

		// Youtube API DATA JSON
		$json = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCeJfiHw5K5kq3zDLJ-NR0jA&maxResults=3&order=date&type=video&key=AIzaSyDfUOi9xDZBJjW-dijNM66xhcd4GsioX8k");
		$jsonItems = json_decode($json, true);
		$data["youtube"] = $jsonItems["items"];
		echo view('templates/header');
		echo view('home', $data);
		echo view('templates/footer');
	}
}
