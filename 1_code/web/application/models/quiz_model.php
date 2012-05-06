<?php

class Quiz_model extends CI_model {

   public $number_of_questions = 0;
   public $correct_answers = 0;

   public function __construct()
   {
      parent::__construct();
   }

   private function arrayize_quiz($lab)
   {
      $quiz = read_file('./content/labs/'.$lab.'/quiz.json');
      if ($quiz === FALSE)
         return false;

      $quiz = json_decode($quiz, TRUE);
      $this->number_of_questions = count($quiz);
      return $quiz;
   }

   public function generate_quiz($lab)
   {
      $quiz = $this->arrayize_quiz($lab);
      return $quiz;
   }

   public function grade_quiz($lab, $input)
   {
      $quiz = $this->arrayize_quiz($lab);
      $number_correct = 0;
      foreach ($input as $key => $selection)
      {
         if (isset($quiz[$key]['answers'][$selection]['correct']))
         {
            $quiz[$key]['answered_correctly'] = 1;
            $this->correct_answers++;
         }

         $quiz[$key]['answers'][$selection]['selected'] = true;
      }
   
      return $quiz;
   }

}

?>
