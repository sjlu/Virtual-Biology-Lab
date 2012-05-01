<table class="table table-striped table-bordered">
   <thead>
      <tr>
         <th>Lab</th>
         <th width="20%">Grade</th>
      </tr>
   </thead>

   <tbody>
      <? foreach (dir2list('content/labs') as $lab): ?>
         <tr>
            <td><?= $lab['title'] ?></td>
            <td><?= (isset($grades[$lab['dir']])) ? $grades[$lab['dir']] : 'N/A' ?></td>
         </tr>
      <? endforeach; ?>
   </tbody>
</table>
