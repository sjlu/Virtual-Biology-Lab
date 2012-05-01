<div class="row">
   <div class="span3">
      <?php include_once('sidebar.php'); ?>
   </div>

   <div class="span9">

      <div class="row-fluid">
         <div class="quiz_box well span5">
            <h2>Questions</h2>
            <h1><?= $number_correct ?>/<?= $number_of_questions ?></h1>
         </div>

         <div class="quiz_box well span5">
            <h2>Grade</h2>
            <h1><?= round($number_correct/$number_of_questions*100) ?>%</h1>
         </div>
      </div>

      <form class="well" method="POST">
      <? foreach ($quiz as $q_key => $question): ?>
         <? if (isset($question['answered_correctly'])): ?>
            <span class="label label-success">Correct</span>
         <? else: ?>
            <span class="label label-important">Incorrect</span>
         <? endif; ?>
         <b><?= $question['question'] ?></b>
         <br />
         <? foreach ($question['answers'] as $i_key => $answer): ?>
            <input type="radio" name="<?= $q_key ?>" value="<?= $i_key ?>" disabled <? if (isset($answer['selected'])): ?>checked<? endif; ?>>
            <?= $answer['answer'] ?> <? if (isset($answer['correct'])): ?><span class="label label-info">Correct Answer</span><? endif; ?>
            <br />
         <? endforeach; ?>
         <br />
      <? endforeach; ?>
      </form>
   </div>
</div>
