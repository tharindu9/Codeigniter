<?php


class Insertdata extends CI_Model
{
	public function insert_data(){
	
	$data = array(
        'email' => $this->input->post('email',TRUE),
        'username' => $this->input->post('username',TRUE),
        'password' => sha1($this->input->post('password',TRUE))
);

 return $this->db->insert('sample', $data);
	}
}
?>
