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
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('index',$data);
		$this->load->view('footer');
	}

	public function berita()
	{
		$array = array(
			'id_kategori'=>1
		);
		$jumlah_data	= $this->Model_Berita->jumlah($array);
		$this->load->library('pagination');

		$config=array(
			'base_url'=>base_url().'hmjti/berita/',
			'total_rows'=>$jumlah_data,
			'per_page'=>1,

			'full_tag_open'=>'<ul class="pagination-nav">',
			'first_link'=>'First',
			'last_link'=>'Last',
			'full_tag_close'=>'</ul>',

			'next_tag_open'=>'<li>',
			'next_link'=>'Next',
			'next_tag_close'=>'</li>',

			'prev_tag_open'=>'<li>',
			'prev_link'=>'Prev',
			'next_tag_open'=>'</li>',

			'num_tag_open'=>'<li>',
			'num_tag_close'=>'</li>',
		);
		

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data = array(
			'data1'=>$this->Model_Berita->berita($array,$config['per_page'],$from)
		);
		$this->load->view('berita',$data);
		$this->load->view('side_bar',$data);
		$this->load->view('footer');
		/*
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('berita',$data);
		$this->load->view('side_bar',$data);
		$this->load->view('footer');*/
	}

	public function detail_berita($id_berita){
		$data = array(
				'data'=>$this->Model_Berita->get_detail_berita($id_berita),
				'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('detail_berita',$data);
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('side_bar',$data);
		$this->load->view('footer');
	}
	/*
	public function event()
	{
		$data = array(
		'data1'=>$this->Model_Berita-> get_event(2));
		$this->load->view('event',$data);
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('side_bar',$data);
		$this->load->view('footer');
	}
	*/
	public function struktur_organisasi(){
		$this->load->view('struktur_organisasi');
		$this->load->view('footer');
	}

	public function tentang_kami(){
		$this->load->view('tentang_kami');
		$this->load->view('footer');
	}

	public function event()
	{
		$array = array(
			'id_kategori'=>2
		);
		$jumlah_data	= $this->Model_Berita->jumlah($array);
		$this->load->library('pagination');

		$config=array(
			'base_url'=>base_url().'hmjti/event/',
			'total_rows'=>$jumlah_data,
			'per_page'=>1,

			'full_tag_open'=>'<ul class="pagination-nav">',
			'first_link'=>'First',
			'last_link'=>'Last',
			'full_tag_close'=>'</ul>',

			'next_tag_open'=>'<li>',
			'next_link'=>'Next',
			'next_tag_close'=>'</li>',

			'prev_tag_open'=>'<li>',
			'prev_link'=>'Prev',
			'next_tag_open'=>'</li>',

			'num_tag_open'=>'<li>',
			'num_tag_close'=>'</li>',
		);
		

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data = array(
			'data1'=>$this->Model_Berita->berita($array,$config['per_page'],$from)
		);
		$this->load->view('event',$data);
		$this->load->view('side_bar',$data);
		$this->load->view('footer');
		/*
		$data = array(
		'data1'=>$this->Model_Berita->get_berita());
		$this->load->view('berita',$data);
		$this->load->view('side_bar',$data);
		$this->load->view('footer');*/
	}
}
