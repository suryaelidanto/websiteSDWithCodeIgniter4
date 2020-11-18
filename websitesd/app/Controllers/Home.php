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

		/* 
		APIKEY 1 : AIzaSyDfUOi9xDZBJjW-dijNM66xhcd4GsioX8k
		APIKEY 2 : AIzaSyAg57KPN5d5vGGKcYaBEHURoEFuhit4nno
		*/

		// Youtube API DATA JSON
		$apikey = "AIzaSyAg57KPN5d5vGGKcYaBEHURoEFuhit4nno";
		$json = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCeJfiHw5K5kq3zDLJ-NR0jA&maxResults=3&order=date&type=video&key=$apikey");
		$jsonItems = json_decode($json, true);
		$data["youtube"] = $jsonItems["items"];
		echo view('templates/header');
		echo view('home', $data);
		echo view('templates/footer');
	}


	public function berita()
	{
		$data["berita"] = $this->model->db->table("berita")->get()->getResultArray();
		echo view('templates/header');
		echo view('berita', $data);
		echo view('templates/footer');
	}
}
