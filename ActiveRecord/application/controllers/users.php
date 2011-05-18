<?php
class Users extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function login()
  {
    $this->load->model('user');
    
    if ($this->input->post('email') && $this->input->post('password'))
    {
      // Validamos
      $user = $this->user->check_login($this->input->post('email'), $this->input->post('password'));
      
      if ( ! $user)
      {
        $this->load->view('users/login', array('error' => TRUE));
      }
      else
      {
        // Todo OK
        $this->session->set_userdata(array(
          'id' => $user->id,
          'logged_in' => TRUE
        ));
        
        redirect('posts');
      }
    }
    else
    {
      // No se ha mandado el form
      $this->load->view('users/login');
    }
  }
}