<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lab extends CI_Controller {

   public function intro($lab = 0)
   {
      if ($lab == 0)
         show_404();

      $this->load->view('include/header.php');
      $this->load->view('include/menubar_loggedin.php');
      $this->load->view('lab/intro.php');

   }

   public function view()
   {

   }

   public function quiz()
   {

   }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
