<?php

class Grades_model extends CI_Model {

   public function __construct()
   {
      parent::__construct();
   }

   public function save_grade($lab, $score)
   {
      $this->load->database();
      $this->load->library('session');

      $user = $this->session->userdata('id');

      $this->db->set('id', $user)
         ->set('lab', $lab)
         ->set('grade', $score);

      $this->db->insert('grades');

      return true;
   }

   public function has_taken($lab)
   {
      $this->load->database();
      $this->load->library('session');

      $user = $this->session->userdata('id');

      $this->db->where('id', $user)
         ->where('lab', $lab);

      $query = $this->db->get('grades');

      if ($query->num_rows() > 0)
         return true;

      return false;
   }

   public function grades_for_user()
   {
      $this->load->database();
      $this->load->library('session');

      $user = $this->session->userdata('id');

      $this->db->where('id', $user);
      $query = $this->db->get('grades');

      $output = array();
      foreach ($query->result_array() as $grade)
         $output[$grade['lab']] = $grade['grade'];

      return $output;
   }

   public function grades_for_class()
   {
      $this->load->database();
      $this->load->library('session');

      $section = $this->session->userdata('section_id');
      $this->db->where('section_id', $section);
      $this->db->where('account_type', 'student');

      $query = $this->db->get('users');
      
      $output = array();
      $user_ids = array();
      foreach ($query->result_array() as $user)
      {
         $user_ids[] = $user['id'];
         $output[$user['id']] = $user;
      }

      $this->db->where_in('id', $user_ids);
      $query = $this->db->get('grades');

      foreach ($query->result_array() as $grade)
      {
         if (!isset($output[$grade['id']]['grades']))
            $output[$grade['id']]['grades'] = array();

         $output[$grade['id']]['grades'][$grade['lab']] = $grade['grade'];
      }

      return $output;
   }
}
