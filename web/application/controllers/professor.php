<?php

class Professor extends CI_Controller {

   public function __construct()
   {
      parent::__construct();

      $this->load->library('session');
      
      if ($this->session->userdata('account_type') !== 'professor')
         show_404();
   }

   public function index()
   {
      $this->load->view('include/header');
      $this->load->view('include/menubar_professor');


      $this->load->model('grades_model');
      $data['grades'] = $this->grades_model->grades_for_class();
      $this->load->view('professor', $data);

      $this->load->view('include/footer');
   }

}
