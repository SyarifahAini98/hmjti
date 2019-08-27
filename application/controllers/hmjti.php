<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hmjti extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('Model_Index');
	}
	public function index()
	{
		$this->load->view('index');
	}

	public function news(){
		$this->load->view('kegiatan');
	}

	public function event(){
		$this->load->view('event');
	}

	public function pengurus(){
		$this->load->view('struktur_pengurus');
	}

	public function about(){
		$this->load->view('kritik_saran');
	}

}
