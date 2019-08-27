<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hmjti extends CI_Controller {

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
		$this->load->model('Model_Berita');
	}
	public function index()
	{
		$this->load->view('header');
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('index',$data);
		$this->load->view('footer');
	}

	public function berita()
	{
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('berita',$data);
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('side_bar',$data);
		$this->load->view('footer');
	}

	public function detail_berita($id_berita){
		$this->load->view('header');
		$data = array(
				'data'=>$this->Model_Berita->get_detail_berita($id_berita),
				'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('detail_berita',$data);
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('side_bar',$data);
		$this->load->view('footer');
	}

	public function event(){
		$this->load->view('event');
	}

	public function struktur_pengurus(){
		$this->load->view('header');
		$this->load->view('struktur_organisasi');
		$this->load->view('footer');
	}

	public function about(){
		$this->load->view('kritik_saran');
	}

}
