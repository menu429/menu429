<?php
/**
* 
*/
class Main extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$data['sitetitle'] = 'Recipes Sharing Network'; //Site Title
		$data['categories'] = $this->mCats->get_categories();
		$data['times'] = $this->mTime->get_times();
		$this->load->vars($data); // The second line makes the $data array available inside our models and view.
	}
	
	function index(){
		redirect('main/recipes');
	}
	
	function recipes(){
		$data['recipes'] = $this->mMenu->get_recipes($this->uri->segment(3));
		$data['category'] = $this->mCats->get_current_cat($this->uri->segment(3));
		$this->load->view('recipes', $data);
	}
	
	function details(){
		$data['details'] = $this->mMenu->get_details($this->uri->segment(3));
		$this->load->view('details', $data);
	}
	
	function browse(){
		$data['filter_result'] = $this->mMenu->get_filter_result();
		$this->load->view('browse', $data);
	}
	
	function create(){
		$this->load->view('create');
	}
	
	function submit(){
		$image_url = $this->mMenu->do_upload();
		$this->mMenu->submit_recipe($image_url);
	}
	
}

?>