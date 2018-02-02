<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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


	// public function __construct() 
	// {
	// 	parent::__construct();


 //        //$this->load->library('Template');
   
	// }

	public function index()
	{
		//$this->load->view('welcome_message');
		redirect('home/pages');
	}

	public function pages($pages="")
	{
		if ($pages =="tentang_kami"){
			$this->tentang_kami();
		}
		else if ($pages =="menu_wisata"){
			$this->menu_wisata();
		}
		else if ($pages =="portofolio"){
			$this->portofolio();
		}
		else if ($pages =="hubungi_kami"){
			$this->hubungi_kami();
		}
		else {

			$data['halaman']    = "Index";


            //$this->template->set('menu', 'tentang kami');
            //$this->template->set('submenu', 'fakultas dan jurusan');
            $this->template->load('layouts/master', 'pages/tentang_kami', $data);
		}
		
	}

	public function tentang_kami(){
		$data['menu']    = "Tentang Kami";


            //$this->template->set('menu', 'tentang kami');
            //$this->template->set('submenu', 'fakultas dan jurusan');
            $this->template->load('layouts/master', 'pages/tentang_kami', $data);
	}
}

?>
