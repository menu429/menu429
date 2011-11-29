<?php
	class MTime extends CI_Model{
		
		function __construct(){
			parent::__construct();
		}
		
		function get_times(){
			$data = array();
			
			$this->db->order_by('id', 'asc');
			$q = $this->db->get('time_estimated');
			
			if($q->num_rows() > 0){
				foreach($q->result_array() as $row){
					$data[] = $row;
				}
			}
			
			$q->free_result();
			return $data;
		}
	}
	
?>