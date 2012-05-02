<?php
class Account_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
   }

   public function validate($username, $password)
   {

   }

   public function create($username, $password, $section_key, $account_type)
   {
      $this->load->database();
      
      // check if section exists
      $this->db->where('section_key', $section_key);
      $query = $this->db->get('sections');
      $result = $query->row_array();

      if ($query->num_rows())
         $section_id = $result['id'];
      else
         return 'Invalid section key.';  

      $this->db->where('username', $username);
      $query = $this->db->get('users');
      
      if ($query->num_rows() > 0)
         return 'Username already registered.';

      $this->db->set('username', $username)
         ->set('section_id', $section_id)
         ->set('password', md5($password))
         ->set('account_type', 'student');

      if (!$this->db->insert('users'))
         return 'Something went wrong...';

      return true;
   }
}
?>
