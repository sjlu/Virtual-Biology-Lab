<?php

class Grades extends CI_Controller {
   
   public function index()
   {
      $this->load->view('include/header');
      $this->load->view('include/menubar_loggedin');

      $this->student_grades();
   }

   private function student_grades()
   {
      $this->load->model('grades_model');
      $data['grades'] = $this->grades_model->grades_for_user();

      $this->load->view('grades', $data);
   }
}
