<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Participants_Poster extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Poster_model");
        $this->load->library('pingfest'); 
    }
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
	public function index()
	{
		if(!empty($this->session->userdata("username_admin"))){
			$data["posters"] = $this->Poster_model->getAll(); 
			$this->load->view('/Admin/templates/start');
			$this->load->view('/Admin/templates/header');
			$this->load->view('/Admin/templates/sidebar');
			$this->load->view('/Admin/participants_poster/index', $data);
			$this->load->view('/Admin/templates/footer');
			$this->load->view('/Admin/templates/datatablejs');
			$this->load->view('/Admin/participants_poster/tamplatejs');
			$this->load->view('/Admin/templates/end');
		}else{
			redirect(site_url('admin/login/index'));
		}
	}

	public function id_card($id){
		if(!empty($this->session->userdata("username_admin"))){
			$this->pingfest->view_poster_idcard($id);
		}else{
			redirect(site_url('admin/login/index'));
		}
	}
}
