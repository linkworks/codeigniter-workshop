<?php
class Post extends CI_Model 
{
  /**
   * Returns all posts, unordered
   *
   * @return void
   * @author Ian Murray
   */
  public function all()
  {
    return $this->db->get('posts')
                    ->result();
  }
  
  
}