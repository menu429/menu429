<?php
	class Site extends CI_Controller {	
		function index() {
			$this->load->model('site_model');
			$data['records'] = $this->site_model->getAll();
			$this->load->view('home', $data);
		}
		
		function create(){
			$this->load->view('create');
		}
		
		function insert(){
			$this->db->insert('recipes', $_POST);
			
			redirect('site');
		}
		
		function recipe()
		{
			$this->load->model('site_model');
			/*$data['row'] = $this->site_model->getLast();
			$this->load->view('recipe', $data);*/
			
			$data['row'] = $this->site_model->();
		}
		

	}
?>