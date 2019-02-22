<?php

Class Mbuku extends CI_model {
	public function getAllbukufiksi()
	{
		return $this->db->get('buku')->result_array();

	}
}