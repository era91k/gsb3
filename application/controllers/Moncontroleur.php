<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Moncontroleur extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		//$this->load->view('welcome_message');
		//echo 'test du nouveau controleur';
		$this->load->helper('html');
		$this->load->helper('email');
		$this->load->helper('form');
		$this->load->model('monmodele');
		$this->load->view('lavue');
	}
	
	public function controlcontact(){
		$this->load->model('visiteur');
		$login = $this->input->post('login');
		$mdp = $this->input->post('mdp');
		$connexion = $this->visiteur->seConnect($login, $mdp);
		if ($connexion) {
			$visiteur = $this->visiteur->getVisiteurByLogin($login);
			var_dump($visiteur);
		}
		var_dump($connexion);
	}
	
}
