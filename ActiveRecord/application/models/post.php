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
  
  /**
   * Finds a record by id
   *
   * @param string $id 
   * @return array The post or NULL if not found
   * @author Ian Murray
   */
  public function find($id)
  {
    $post = $this->db->where(array('id' => $id))
                     ->limit('1')
                     ->get('posts')
                     ->result();
    
    return count($post) == 0 ? NULL : $post[0];
  }
  
  /**
   * Updates a record with $id with $data
   *
   * @param string $id 
   * @param string $data 
   * @return void
   * @author Ian Murray
   */
  public function update($id, $data)
  {
    // Update the updated_at field with the new date! :D
    $data['updated_at'] = date('Y-m-d H:i:s');
    $this->db->where(array('id' => $id))
             ->update('posts', $data);
  }
}