<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
	protected $model;
	protected $pager;

	public function __construct()
	{
		$this->model = new UserModel();
		$this->pager = \Config\Services::pager();
	}
	// Home view
	public function index()
	{
		$data["berita"] = $this->model->db->table("berita")->get()->getResultArray();
		$data["galerifoto"] = $this->model->db->query("SELECT * FROM galeri LIMIT 3")->getResultArray();
		$data["judul"] = "SD AL-IRSYAD 02 CILACAP";
		/* 
		APIKEY 1 : AIzaSyDfUOi9xDZBJjW-dijNM66xhcd4GsioX8k
		APIKEY 2 : AIzaSyAg57KPN5d5vGGKcYaBEHURoEFuhit4nno
		APIKEY 3 : AIzaSyDMev1d2JTQ3QrdcFDP-_UrgjTOqcIeUHM
		APIKEY 4 : AIzaSyCTh74-40kkedqFsnff2Yne0qtATVxXt40
		*/

		// Youtube API DATA JSON\
		$apikey = "AIzaSyAg57KPN5d5vGGKcYaBEHURoEFuhit4nno";
		$json = file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCeJfiHw5K5kq3zDLJ-NR0jA&maxResults=3&order=date&type=video&key=$apikey");
		$jsonItems = json_decode($json, true);
		$data["youtube"] = $jsonItems["items"];
		echo view('templates/header', $data);
		echo view('home', $data);
		echo view('templates/footer');
	}


	public function berita()
	{
		$data["judul"] = "BERITA - SD AL-IRSYAD 02 CILACAP";
		$data["pagination"] = [
			'users' => $this->model->paginate(2),
			'pager' => $this->model->pager
		];

		echo view('templates/header', $data);
		echo view('berita', $data);
		echo view('templates/footer');
	}

	public function galerifoto()
	{
		$data["galerifoto"] = $this->model->db->table("galeri")->get()->getResultArray();
		$data["judul"] = "GALERI FOTO - SD AL-IRSYAD 02 CILACAP";

		echo view('templates/header', $data);
		echo view('galerifoto', $data);
		echo view('templates/footer');
	}

	public function detail($id)
	{
		$data["berita"] = $this->model->db->table("berita")->getWhere(["id" => $id])->getResultArray();
		$data["judul"] = $data["berita"][0]["judul"];

		echo view('templates/header', $data);
		echo view('detailberita', $data);
		echo view('templates/footer');
	}


	public function visimisi()
	{
		$data["judul"] = "VISIMISI - SD AL-IRSYAD 02 CILACAP";

		echo view('templates/header', $data);
		echo view('visimisi');
		echo view('templates/footer');
	}

	public function profilkaryawan()
	{
		$data["judul"] = "PROFIL - SD AL-IRSYAD 02 CILACAP";

		$data["profil"] = $this->model->db->table("profil")->get()->getResultArray();
		echo view('templates/header', $data);
		echo view('profilkaryawan', $data);
		echo view('templates/footer');
	}

	public function fasilitas()
	{
		$data["judul"] = "FASILITAS - SD AL-IRSYAD 02 CILACAP";

		echo view('templates/header', $data);
		echo view('fasilitas');
		echo view('templates/footer');
	}

	public function perpustakaan()
	{
		$data["judul"] = "PERPUSTAKAAN - SD AL-IRSYAD 02 CILACAP";
		$data["perpustakaan"] = $this->model->db->table("perpustakaan")->get()->getResultArray();
		echo view('templates/header', $data);
		echo view('perpustakaan', $data);
		echo view('templates/footer');
	}
}
