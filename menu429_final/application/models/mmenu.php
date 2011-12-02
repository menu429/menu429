<?php
	class MMenu extends CI_Model{
		
		var $image_path;
		var $image_url;
		
		function __construct(){
			parent::__construct();
			
			$this->image_path = realpath(APPPATH . '../images');
			$this->image_url = base_url().'images/';
		}
		
		function get_recipes($category){
			$data = array();
			
			if($category){
				$options = array('category' =>$category);
				$this->db->order_by('id', 'desc');
				$q = $this->db->get_where('recipes', $options);
			}else{
				$this->db->order_by('id', 'desc');
				$q = $this->db->get('recipes', 9);
			}
			
			if($q->num_rows() > 0){
				foreach ($q->result_array() as $row) {
					$data[] = $row;
				}
			}
			
			$q->free_result();
			return $data;
		}
		
		function get_details($id){
			$this->form_validation->set_rules('category', 'Category', 'required|max_length[30]');
		    $this->form_validation->set_rules('time_estimated', 'Time Esimated', 'required|max_length[30]');
			$this->form_validation->set_rules('difficulty', 'Difficulty', 'required|max_length[30]');
			
			$data = array();
			
			$options = array('id' => $id);
			$q = $this->db->get_where('recipes', $options, 1);
			
			if($q->num_rows() > 0){
				foreach($q->result_array() as $row){
					$data = $row;
				}
			}
			
			$q->free_result();
			return $data;
		}
		
		function get_filter_result(){
			$data = array();
			
			$category = $this->input->post('category');
			$estimated_time = $this->input->post('estimated_time');
			$difficulty = $this->input->post('difficulty');
			
			if(empty($category) && !empty($estimated_time) && !empty($difficulty)){
				$options = "estimated_time = '".$estimated_time."' AND difficulty = '".$difficulty."';";
			}
			else if(!empty($category) && empty($estimated_time) && !empty($difficulty)){
				$options = "category = '".$category."' AND difficulty = '".$difficulty."';";
			}else if(!empty($category) && !empty($estimated_time) && empty($difficulty)){
				$options = "category = '".$category."' AND estimated_time = '".$estimated_time."';";
			}else if(empty($category) && empty($estimated_time) && !empty($difficulty)){
				$options = "difficulty = '".$difficulty."';";
			}else if(empty($category) && !empty($estimated_time) && empty($difficulty)){
					$options = "estimated_time = '".$estimated_time."';";
			}else if(!empty($category) && empty($estimated_time) && empty($difficulty)){
					$options = "category = '".$category."';";
			}else if(!empty($category) && !empty($estimated_time) && !empty($difficulty)){
					$options = "category = '".$category."' AND estimated_time = '".$estimated_time."' AND difficulty = '".$difficulty."';";
			}else if(empty($category) && empty($estimated_time) && empty($difficulty)){
							$options = "category = '".$category."' AND estimated_time = '".$estimated_time."' AND difficulty = '".$difficulty."';";
			}
			
			$q = $this->db->get_where('recipes', $options);
			
			if($q->num_rows() > 0){
				foreach($q->result_array() as $row){
					$data[] = $row;
				}
			}
			
			$q->free_result();
			return $data;
		}
		
		function do_upload() {
			$config = array(
				'allowed_types' => 'jpg|jpeg|gif|png',
				'upload_path' => $this->image_path,
				'max_size' => 2000
			);

			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$image_data = $this->upload->data();

			$config = array(
				'source_image' => $image_data['full_path'],
				'new_image' => $this->image_path . '/thumbs',
				'maintain_ration' => true,
				'width' => 150,
				'height' => 100
			);

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			$file_url = $this->image_url.'thumbs/'.$image_data['raw_name'].$image_data['file_ext'];
			
			return $file_url;
		}
		
		function submit_recipe($image_url){
			$this->form_validation->set_rules('title', 'Title', 'required|max_length[250]|htmlspecialchars');
		    $this->form_validation->set_rules('description', 'Description', 'required|htmlspecialchars');
			$this->form_validation->set_rules('creator', 'Created by', 'required|htmlspecialchars');
		    $this->form_validation->set_rules('category', 'Category', 'required|max_length[30]');
		    $this->form_validation->set_rules('estimated_time', 'Time Esimated', 'required|max_length[30]');
			$this->form_validation->set_rules('difficulty', 'Difficulty', 'required|max_length[30]');
			$this->form_validation->set_rules('ingredients', 'Ingredients', 'required|htmlspecialchars');
			$this->form_validation->set_rules('directions', 'Directions', 'required|htmlspecialchars');
			
			if ($this->form_validation->run() == FALSE) {
			    $this->load->view('create');
			}
			else {
			    $data = array(
			        'title' =>  $this->input->post('title'),
			        'description' =>  $this->input->post('description'),
					'creator'  =>  $this->input->post('creator'),
			        'category' =>  $this->input->post('category'),
			        'estimated_time' =>  $this->input->post('estimated_time'),
			        'difficulty'  =>  $this->input->post('difficulty'),
			        'ingredients' =>  $this->input->post('ingredients'),
			        'directions'  =>  $this->input->post('directions'),
			        'ipaddress' =>  $this->input->ip_address(),
			        'posted' =>  time(),
					'image_url' => $image_url
			    );
			    $this->db->insert('recipes', $data);
			    redirect('main/recipes');
			}
		}
	}
	
?>