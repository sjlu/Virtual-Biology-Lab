<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

   private function create_form()
   {
      $this->load->view('include/header');
      $this->load->view('include/menubar_loggedout');
      $this->load->view('account/create');
      $this->load->view('include/footer');
   }

   private function create_validate()
   {
      $this->load->model('account_model');

      if (($error = $this->account_model->create(
         $_POST['username'], 
         $_POST['password'], 
         $_POST['section'], 
         'student')) === true)
      {
         $page_data['info'] = 'Your account was created, you may now login.';

         $this->load->view('include/header');
         $this->load->view('include/menubar_loggedout');
         $this->load->view('account/login', $page_data);
         $this->load->view('include/footer');
      }
      else
      {
         $page_data['error'] = $error;

         $this->load->view('include/header');
         $this->load->view('include/menubar_loggedout');
         $this->load->view('account/create', $page_data);
         $this->load->view('include/footer');
      }
   }

   public function create()
   {
      switch ($_SERVER['REQUEST_METHOD']) {
         case 'POST':
            $this->create_validate();
            break;
         case 'GET':
            $this->create_form();
            break;
      }
   }
   

   private function login_form()
   {
      $this->load->view('include/header');
      $this->load->view('include/menubar_loggedout');
      $this->load->view('account/login');
      $this->load->view('include/footer');
   }

   private function login_validate()
   {
      /*
         This is for temporary purposes
      */

      $this->load->database();
      $this->db->where('username', $_POST['username'])
         ->where('password', md5($_POST['password']));

      $query = $this->db->get('users');
      $result = $query->row_array();

      if ($query->num_rows())
      {
         $session_data = array();
         $session_data['id'] = $result['id'];
         $session_data['username'] = $_POST['username'];
         $session_data['account_type'] = $result['account_type'];
         $session_data['section_id'] = $result['section_id'];
      }
      else
         $error = 'Incorrect username and password!';

      $page_data = array('username' => $_POST['username']);
      if (!empty($error))
      {
         $page_data['error'] = $error;

         $this->load->view('include/header');
         $this->load->view('include/menubar_loggedout');
         $this->load->view('account/login', $page_data);
         $this->load->view('include/footer');
      }
      else
      {
         $this->load->library('session');
         $this->session->set_userdata($session_data);
         if ($session_data['account_type'] == 'professor')
            redirect('/professor', 'refresh');
         else
            redirect('/', 'refresh');
      }
   }

   public function login()
   {
      switch ($_SERVER['REQUEST_METHOD']) {
         case 'POST':
            $this->login_validate();
            break;
         case 'GET':
            $this->login_form();
            break;
      }
   }

   public function logout()
   {
      $this->load->library('session');
      $this->session->sess_destroy();

      redirect('/', 'refresh');
   }
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
