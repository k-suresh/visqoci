<?php
class Login extends CI_Controller {

	function index()
	{
		if($this->session->userdata('email') != ""){
			redirect('dashboard','Location');	
		}
		else{	
			$this->load->view('logout');
			//$this->load->view('home');
		}
		//$this->output->enable_profiler(TRUE);
	}
	function login_controller()
	{		
		$query = $this->db->get_where('user', array('email' => $_POST['username'],"password" => md5($_POST['password'])));		

		if($query->num_rows==1)
		{                    
                        $row = $query->result();
			$newdata = array(
				   'email'  => $_POST['username'],
				   'logged_in' => TRUE,
				   'first_name' => $row[0]->first_name,
                                   'last_name' => $row[0]->last_name,
				   'user_role_id' => $row[0]->role_id,
				   'user_id' => $row[0]->id
					);
			$this->session->set_userdata($newdata);
			$this->session->set_flashdata('msg', 'Welcome to Admin panel');
			redirect('dashboard','Location');
		}
		else
		{
			$this->session->set_flashdata('msg', 'Wrong Username Or Password. Please Try again!!!');
			redirect('login/index/','Location');
		}

	}	//end of login_controller
	function logout()
	{		
		$this->session->sess_destroy();
		redirect('login/index/','Location');
	}	//end of logout

}
?>