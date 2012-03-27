<?php

class Grades extends CI_Controller {
   
   public function index()
   {
      $this->load->view('include/header');
      $this->load->view('include/menubar_loggedin');
      $this->load->view('grades');
   }

}
