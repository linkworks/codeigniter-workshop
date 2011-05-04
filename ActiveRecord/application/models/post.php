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
  
  /**
   * Creates a post on the database. Fills date fields automatically
   *
   * @param string $data An associative array of data (column => content)
   * @return void
   * @author Ian Murray
   */
  public function create($data)
  {
    // Set created_at and updated_at on the array
    $data['created_at'] = $data['updated_at'] = date('Y-m-d H:i:s');
    $this->db->insert('posts', $data);
  }
  
  
}