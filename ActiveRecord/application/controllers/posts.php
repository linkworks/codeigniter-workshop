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
  
  
}