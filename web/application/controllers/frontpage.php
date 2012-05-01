<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontpage extends CI_Controller {

   public function __construct()
   {
      parent::__construct();
      $this->load->library('migration');
      if (!$this->migration->current())
         show_error($this->migration->error_string());
   }

   private function loggedin_index()
   {
      $this->load->view('include/header');
      $this->load->view('include/menubar_loggedin');
		$this->load->view('dashboard');
      $this->load->view('include/footer');
   }

   private function loggedout_index()
   {
      $this->load->view('include/header');
      $this->load->view('include/menubar_loggedout');
      $this->load->view('frontpage');
      $this->load->view('include/footer');
   }

   public function index()
	{
      $this->load->library('session');
      if ($account_type = $this->session->userdata('account_type'))
         if ($account_type == 'student')
            $this->loggedin_index();
         else if ($account_type == 'professor')
            redirect('/professor', TRUE);
      else
         $this->loggedout_index();
	}
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
