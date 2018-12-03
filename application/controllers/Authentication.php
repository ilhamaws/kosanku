<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class authentication extends CI_Controller
{
  public $authentication;

  public function __Construct() {
    parent::__Construct();
    // if(!$this->session->userdata('logged_in')) {
    //     redirect(base_url());
    // if($this->session->userdata('role') != 'admin'){
    //         redirect(base_url());
    //     }
    // }
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('authentication_model');

      // $this->authentication = new authentication_model;

}

  public function insertUser()
  {
      // $this->form_validation->set_rules('name', 'required');
			// $this->form_validation->set_rules('username', 'required');
			// $this->form_validation->set_rules('email', 'required');
      // $this->form_validation->set_rules('alamat', 'required');
      // $this->form_validation->set_rules('gender', 'required');
      // $this->form_validation->set_rules('role', 'required');
			// $this->form_validation->set_rules('password', 'required');
			// $this->form_validation->set_rules('password2', 'matches[password]');

			// if($this->form_validation->run() === FALSE){
        // $this->load->view('menuActive');
        // $this->load->view('template/header');
        // $this->load->view('register');
        // $this->load->view('template/footer');
			// } else {
				// Encrypt password
        $data_masteruser = array(
          'username' => $this->input->post('username'),
          'role' => $this->input->post('role'),
          'password' => md5($this->input->post('password'))
        );
        $this->authentication_model->insert_user('masteruser', $data_masteruser);

				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('pages');
			// }
  }

  public function register() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('register');
    $this->load->view('template/footer');
  }

  public function login() {
    $this->load->view('menuActive');
    $this->load->view('template/header');
    $this->load->view('login');
    $this->load->view('template/footer');
  }


  // public function check_username_exists($username){
  //   $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
  //   if($this->authentication_model->check_username_exists($username)){
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }
  //
  //
  // public function check_email_exists($email){
  //   $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
  //   if($this->authentication_model->check_email_exists($email)){
  //     return true;
  //   } else {
  //     return false;
  //   }
  // }
}
 ?>
