<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function selectall()
	{
		$query = $this->db->get('user');
		return $query->result_array();
	}

	public function selectbyid($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('user');

		return $query->first_row('array');
	}

	public function insert($data){
		$this->db->insert('user', $data);
		return $this->db->affected_rows();
	}

	public function update($data, $id){
		$this->db->where('id', $id);
		$this->db->update('user', $data);

		return $this->db->affected_rows();
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('user');

		return $this->db->affected_rows();
	}
}
