<?php

class Site_model extends CI_Model {
	
	function getAll() {
		$q = $this->db->get('recipes', 5);
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
		return $data;
		}
	}
	
	function getLast()
	{
		$database = $this->db->get('recipes');
		$numrows = $database->num_rows();
		$sql = "SELECT * FROM recipes WHERE recipe_id = ?";
		$q = $this->db->query($sql, $numrows);
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
		return $data;
		}
	}
}