<?php
class User extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function check_login($email, $password)
  {
    $query = $this->db->where(array(
      'email' => $email,
      'password' => md5($password)
    ))->get('users');
    
    $user = $query->result();
    
    if ($user)
    {
      return $user[0];
    }
    
    return FALSE;
  }
}