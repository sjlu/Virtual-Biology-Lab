<?php $quizzes = dir2list('content/labs'); ?>

<h2>Professor Report</h2>
<div class="alert alert-info">
<b>Welcome professor!</b> This will display all the registered users for your course and their respective grades. If they haven't taken a lab yet, it will be displayed as 'N/A', however it still will reflect in their final grades.
</div>
<table class="table table-striped table-bordered table-condensed">
   <thead>
      <tr>
         <th><h4>Student NetID</h4></th>
         <th colspan="<?= count($quizzes) ?>"><h4>Quizes</h4></th>
         <th><h4>Average</h4></th>
      </tr>

      <tr>
         <th></th>
         <? foreach ($quizzes as $quiz): ?>
            <th><?= $quiz['title'] ?></th>
         <? endforeach; ?>
         <th></th>
      </tr>
   </thead>
     
   <? foreach ($grades as $student): ?>
      <tr>
         <td><h4><?= $student['username'] ?></h4></td>
         <? foreach ($quizzes as $quiz): ?>
            <td><h4><?= isset($student['grades'][$quiz['dir']]) ? $student['grades'][$quiz['dir']] : 'N/A' ?></h4></td>
         <? endforeach; ?>
         <td><h4><?= isset($student['grades']) ? (array_sum($student['grades'])/(count($quizzes)*100))*100 : '0' ?></h4></td>
      </tr>
   <? endforeach; ?>
</table>
