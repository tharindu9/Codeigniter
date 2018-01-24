<?php
/**
* 
*/
class Insert extends  CI_Controller
{
	public function insert_data(){

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[sample.email]');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[8]');

if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('Insert');
            

                }
                else
                {
                        $this->load->model('Insertdata');
                        $response=$this->Insertdata->insert_data();
                        if($response){
                        	$this->session->set_flashdata('msg','Insert success');
                        	redirect('Insert/insert_data');
                        }
                }
}
	
}

?>
