<?php
function is_active($page = '')
{
   if ($page == uri_string())
      return 'class="active"';
}
?>

<div class="subnav" style="margin-bottom: 10px;">
   <ul class="nav nav-pills">
      <li <?= is_active() ?>><a href="<?= site_url() ?>">Home</a></li>
      <ul class="nav nav-pills pull-right">
         <li <?= is_active('account/create') ?>><a href="<?= site_url('account/create') ?>">Create</a></li>
         <li <?= is_active('account/login') ?>><a href="<?= site_url('account/login') ?>">Login</a></li>
      </ul>
   </ul>
</div>
