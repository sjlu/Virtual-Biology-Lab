<div class="subnav" style="margin-bottom: 10px;">
   <ul class="nav nav-pills">
      <li <? if(is_active()): ?>class="active"<? endif; ?>><a href="<?= site_url() ?>">Dashboard</a></li>
      <li class="dropdown <? if(is_active('lab')): ?>active<? endif; ?>">
         <a class="dropdown-toggle" data-toggle="dropdown">Labs <b class="caret"></b></a>
         <ul class="dropdown-menu">
            <? foreach(dir2list('./content/labs') as $lab): ?>
               <li><a href="<?= site_url('lab/intro/'.$lab['dir']) ?>"><?= $lab['title'] ?></a></li>
            <? endforeach; ?>
         </ul>
      </li> 
      <li <? if(is_active('grades')): ?>class="active"<? endif; ?>><a href="<?= site_url('grades') ?>">Grades</a></li>
      <ul class="nav nav-pills pull-right">
         <li><a href="<?= site_url('account/logout') ?>">Logout</a></li>
      </ul>
   </ul>
</div>
