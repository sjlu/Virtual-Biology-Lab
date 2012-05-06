<div class="row">
   <div class="span3">
      <?php include_once('sidebar.php'); ?>
   </div>

   <div class="span9">
      <form class="well" method="POST">
      <? foreach ($quiz as $q_key => $question): ?>
         <label class="question"><?= $question['question'] ?></label> 
         <? foreach ($question['answers'] as $i_key => $answer): ?>
            <input type="radio" name="<?= $q_key ?>" value="<?= $i_key ?>">
            <?= $answer['answer'] ?><br />
         <? endforeach; ?>
         <br />
      <? endforeach; ?>
      <button type="submit" class="btn btn-large btn-primary">Submit</button>
      </form>
   </div>
</div>
