<div class="row">
   <div class="offset4 span5">
      <h3>Login</h3>
      <? if (!empty($error)): ?>
         <div class="alert alert-error">
            <b>Error!</b> <?= $error ?>
         </div>
      <? endif; ?>
      <? if (!empty($info)): ?>
         <div class="alert alert-info">
            <b>Info.</b> <?= $info ?>
         </div>
      <? endif; ?>
      <form class="well" method="POST" action="<?= site_url('account/login') ?>">
         <label>Username</label>
         <input type="text" name="username" class="span4" <? if (!empty($username)): ?> value="<?= $username ?>" <? endif; ?>>
         <label>Password</label>
         <input type="password" name="password" class="span4">
         <br />
         <button type="submit" class="btn btn-primary">Login</button>
      </form>
   </div>
</div>
