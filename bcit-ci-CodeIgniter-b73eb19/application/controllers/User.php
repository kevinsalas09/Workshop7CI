<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
		$this->load->view('users/login');
	}

	public function add()
	{
		$this->load->view('users/insert');
	}

    public function dashboard()
	{
		$data['usuarios'] = $this->User_model->getUsers();
		$this->load->view('users/dashboard', $data);
	}

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->authenticate($username, $password);
        if($user){
            redirect('user/dashboard');
        }
        else{
            redirect('/');
        }
    }

	public function insert()
    {
        $result = $this->User_model->insert($this->input->post());
        if($result){
			$this->session->set_flashdata('msg', 'User cretaed, please login');
            redirect('user/dashboard');
        }
        else{
			$this->session->set_flashdata('msg', 'There was an error');
            redirect('user/dashboard');
        }
    }
}