<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lab extends CI_Controller {

   public function intro($lab = '')
   {
      if (empty($lab))
         show_404();

      $this->load->model('lab_model');
      $intro_text = $this->lab_model->get_intro($lab);

      if ($intro_text === FALSE)
         show_404();

      $this->load->view('include/header.php');
      $this->load->view('include/menubar_loggedin.php');

      $data = array('intro_text' => $intro_text);
      $this->load->view('lab/intro.php', $data);

   }

   public function view($lab = '')
   {
      if (empty($lab))
         show_404();

      $this->load->model('lab_model');
      $swf_link = $this->lab_model->get_lab($lab);

      if ($swf_link === FALSE)
         show_404();

      $this->load->view('include/header.php');
      $this->load->view('include/menubar_loggedin.php');

      //$data = array('intro_text' => $intro_text);
      $data = array('swf_link' => $swf_link);
      $this->load->view('lab/view.php', $data);
   }

   public function quiz($lab = '')
   {
      if (empty($lab))
         show_404();
      
      $this->load->view('include/header.php');
      $this->load->view('include/menubar_loggedin.php');
      $this->load->view('lab/quiz.php');
   }

}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
