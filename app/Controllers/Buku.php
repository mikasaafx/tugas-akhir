<?php

namespace App\Controllers;

use App\Models\BukuModel;


class Buku extends BaseController
{
	protected $bukuModel;
	public function __construct()
	{
        $this->bukuModel = new BukuModel();
        // $this->bukuModel = new \App\Models\BukuModel();

	}

	public function index()
	{

        // $buku = $this->bukuModel->findAll();

		$data = [
            'title' => 'Daftar Buku',
            'buku'  => $this->bukuModel->getBuku()
        ];




		return view('buku/index', $data);
	}

	public function detail($slug)
	{
		// $buku = $this->bukuModel->getBuku($slug);
		$data = [
			'title' => 'Detail Buku',
			'buku' => $this->bukuModel->getBuku($slug)
		];

		// jika buku tidak ada di tabel
		if(empty($data['buku'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('judul buku ' . $slug . ' tidak ditemukan');
		}

		return view('buku/detail', $data);
	}

	public function create()
	{	
		session();
		$data = [
			'title' => 'Form Tambah Buku',
			'validation' => \Config\Services::validation()
		];
		
		return view('buku/create', $data);
	}	

	public function save()
	{
		// validasi input

		if(!$this->validate([
			'judul' => 'required|is_unique[buku.judul]'
			// 'sutradara' => 'required'


		])) {

			// belum muncul
			$validation = \Config\Services::validation();
			return redirect()->to('buku/create')->withInput()->with('validation', $validation);
		}

		$slug = url_title($this->request->getVar('judul'), '-', true);
		$this->bukuModel->save([
			'judul' => $this->request->getVar('judul'),
			'slug' => $slug,
			'sutradara' => $this->request->getVar('sutradara'),
			'ph' => $this->request->getVar('ph'),
			'sampul' => $this->request->getVar('sampul')

		]);

		session()->setFlashdata('pesan', '<i class="bi bi-check-circle-fill"></i> Alhamdulillah, data berhasil ditambahkan.');


		return redirect()->to('/buku');
	}


}