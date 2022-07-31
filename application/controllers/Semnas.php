<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Semnas extends CI_Controller {

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

    public function __construct() {
        parent::__construct();  
        $this->load->model("User_model");
        $this->load->model("Event_participant_model");
    }

	public function index()
	{
		$this->load->view('templates/header', ['title' => 'Pingfest 2021']);
		$this->load->view('semnas/index');
		$this->load->view('templates/footer');
	}

	public function tiket()
	{  
        $this->check_login();
		$data["user"] = $this->User_model->getById($_SESSION['user_id']);  
		$data["event"] = $this->Event_participant_model->getByIdAndEvent($_SESSION['user_id'],"semnas");   
		$this->load->view('semnas/tiket', $data); 
	}

    private function check_login() {
        if (empty($_SESSION['user_id'])) {
            redirect('auth');
        } 
    }
}
