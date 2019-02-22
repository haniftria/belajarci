<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mbuku');
	}

	public function index()
		{
			$data['judul'] = 'Home - ILibrary';
			$this->load->view('themes/header', $data);
			$this->load->view('pages/home');
			$this->load->view('themes/footer');
		}
	public function contact()
		{
			$data['judul'] = 'Contact - ILibrary';
			$this->load->view('themes/header', $data);
			$this->load->view('pages/contact');
			$this->load->view('themes/footer');
		}	
	public function fiksi()
		{
			$this->load->model('Mbuku');
			$data['judul'] = 'Buku Fiksi - ILibrary';

			$data['bukufiksi'] = $this->Mbuku->getAllbukufiksi();
			$this->load->view('themes/header', $data);
			$this->load->view('pages/fiksi', $data);
			$this->load->view('themes/footer');
		}
	public function nonfiksi()
		{
			$data['judul'] = 'Buku NonFiksi - ILibrary';
			$this->load->view('themes/header', $data);
			$this->load->view('pages/nonfiksi');
			$this->load->view('themes/footer');
		}	
	public function about()
		{
			$data['judul'] = 'About - ILibrary';
			$this->load->view('themes/header', $data);
			$this->load->view('pages/about');
			$this->load->view('themes/footer');
		}	
	public function services()
		{
			$data['judul'] = 'Services - ILibrary';
			$this->load->view('themes/header', $data);
			$this->load->view('pages/services');
			$this->load->view('themes/footer');
		}
}	