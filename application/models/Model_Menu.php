<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Menu extends CI_Model {


	public function GetAllMenu()
	{
		$this->db->from('menu');
		$query = $this->db->get();

		return $query->result();
	}

	public function input_pemesan($data)
	{
		$this->db->insert('user', $data);
	}

	public function getId($id)
	{
		$this->db->from('menu');
		$this->db->where('kode_menu', $id);

		$query = $this->db->get();
		return $query->result();
	}

}



	?>
