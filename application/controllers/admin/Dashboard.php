<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("Bettle_model");
        $this->load->model("Music_model");
        $this->load->model("Paper_model");
        $this->load->model("Semnas_model");
        $this->load->model("Event_participant_model");
        $this->load->model("User_model");
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
			$countBettle = $this->Event_participant_model->countTableRow('battle'); 
			$countEsport = $this->Event_participant_model->countTableRow('esport'); 
			$countPoster = $this->Event_participant_model->countTableRow('poster'); 
			$countUIUX = $this->Event_participant_model->countTableRow('uiux'); 
			$countSemnas = $this->Event_participant_model->countTableRow('semnas'); 
			$countParticipant = $this->Event_participant_model->countRow(1); 
			$countBelumParticipant = $this->Event_participant_model->countRow(0); 
			$countAkun = $this->User_model->countRow(); 

			$sumBettle = $this->Event_participant_model->sumPrice('battle'); 
			$sumEsport = $this->Event_participant_model->sumPrice('esport'); 
			$sumPoster = $this->Event_participant_model->sumPrice('poster'); 
			$sumUIUX = $this->Event_participant_model->sumPrice('uiux'); 
			$sumSemnas = $this->Event_participant_model->sumPrice('semnas'); 
			$sumSemua = $this->Event_participant_model->sumPriceAll(); 

			$this->load->view('/Admin/templates/start');
			$this->load->view('/Admin/templates/header');
			$this->load->view('/Admin/templates/sidebar');
			$this->load->view('/Admin/dashboard',[
				'countBettle' => $countBettle,
				'countEsport' => $countEsport,
				'countPoster' => $countPoster,
				'countUIUX' => $countUIUX,
				'countSemnas' => $countSemnas,
				'countParticipant' => $countParticipant,
				'sumBettle' => $sumBettle,
				'sumEsport' => $sumEsport,
				'sumPoster' => $sumPoster,
				'sumUIUX' => $sumUIUX,
				'sumSemnas' => $sumSemnas,
				'sumSemua' => $sumSemua,
				'countBelumParticipant' => $countBelumParticipant,
				'countAkun' => $countAkun,
			]);
			$this->load->view('/Admin/templates/footer');
			$this->load->view('/Admin/templates/dashboardjs');
			$this->load->view('/Admin/templates/end');
		}else{
			redirect(site_url('admin/login/index'));
		}
	}
}
