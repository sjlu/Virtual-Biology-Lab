<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lab_model extends CI_Model
{

   public function __construct()
   {
      parent::__construct();
   }

   private function is_functional($lab)
   {
      $dir = get_filenames('./content/labs/'.$lab);
      
      if ($dir === false)
         return false;

      if (in_array("intro.txt", $dir) 
         && in_array("lab.swf", $dir)
         && in_array("quiz.json", $dir)
      )
         return true;

      return false;
   }

   public function get_intro($lab)
   {
      if (!$this->is_functional($lab))
         return false;

      $file = read_file('./content/labs/'.$lab.'/intro.txt');
      if ($file === FALSE)
         return '';

      return nl2br($file);
   }
   
   public function get_lab($lab)
   {
      if (!$this->is_functional($lab))
         return false;

      return 'content/labs/'.$lab.'/lab.swf';
   }

}
