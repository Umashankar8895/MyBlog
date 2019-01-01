<?php
class Login extends MY_Controller{
	public function index()
	{
		//$this->load->helper('html');
		if($this->session->userdata('user_id'))
			return redirect('admin/dashboard');
		$this->load->helper('form');
		$this->load->view('public/admin_login');
	}
	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('userName','User Name','required|max_length[50]|trim');
		$this->form_validation->set_rules('password','Password','required|max_length[50]');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if($this->form_validation->run()){
			//echo"validation Success.";
			$username=$this->input->post('userName');
			$password=$this->input->post('password');
			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->login_valid($username,$password);
			if($login_id){
				//credentials valid.
				$this->load->library('session');
				$this->session->set_userdata('user_id',$login_id);
				//echo "Match";
				//$this->load->view('admin/dashboard');
				return redirect('admin/dashboard');
			}else{
				//athuentication failed.
				$this->session->set_flashdata('loginFailed','Invalid User Name/Password');
				return redirect('login');
			}
		}
		else{
			//echo"Failed.";
			$this->load->view('public/admin_login');
			//echo validation_errors();
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}

}