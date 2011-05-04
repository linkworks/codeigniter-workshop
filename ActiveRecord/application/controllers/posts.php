<?php
class Posts extends CI_Controller 
{
  // Swap these to use simple forms and normal forms with helpers.
  // static $forms_folder = 'helper_forms/';
  static $forms_folder = 'simple_forms/';
  
  /**
   * Constructor, loads the post model.
   *
   * @author Ian Murray
   */
  public function __construct()
  {
    parent::__construct();
    
    // Load the model for this controller on construction
    $this->load->model('post');
  }
  
  /**
   * Shortcut to include header and footer easily.
   *
   * @param string $view The view's name
   * @param string $parameters Parameters to pass to the view specified with $view
   * @return void
   * @author Ian Murray
   */
  private function load_view($view, $parameters = array())
  {
    $this->load->view('header');
    $this->load->view($view, $parameters);
    $this->load->view('footer');
  }
  
  /**
   * Shows a list of posts
   *
   * @return void
   * @author Ian Murray
   */
  public function index()
  {
    $this->load_view('posts/index', array(
      'posts' => $this->post->all()
    ));
  }
  
  /**
   * Shows the create post form
   *
   * @return void
   * @author Ian Murray
   */
  public function create()
  {
    if ($this->input->post('submit')) // Simple way to detect if a form was submitted, checking the submit button.
    {
      // Skip validation for now. Create the post
      $this->post->create(array(
        'title' => $this->input->post('title'),
        'body'  => $this->input->post('body')
      ));
      
      redirect('posts/index'); // Redirect to index
    }
    else
    {
      // Nothing was submitted, show the form.
      $this->load_view('posts/' . Posts::$forms_folder . 'create');
    }
  }
  
  /**
   * Shows a form to update a post
   *
   * @param string $id 
   * @return void
   * @author Ian Murray
   */
  public function update($id)
  {
    if ($post = $this->post->find($id))
    {
      if ($this->input->post('submit'))
      {
        $this->post->update($id, array(
          'title' => $this->input->post('title'),
          'body'  => $this->input->post('body')
        ));
        
        // Redirect to index
        redirect('posts/index');
      }
      else
      {
        $this->load_view('posts/' . Posts::$forms_folder . 'update', array(
          'post' => $post
        ));
      }
    }
    else
    {
      show_404(); // Shows a 404 page if the record doesn't exist
    }
  }
  
}