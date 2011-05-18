<h1>Login!</h1>

<?php if (isset($error)): ?>
  <p>Error! El email o el password son incorrectos</p>
<?php endif; ?>

<?= form_open('users/login') ?>
  Email: <?= form_input('email') ?>
  Password: <?= form_password('password') ?>
  <?= form_submit(NULL, 'Enviar') ?>
<?= form_close() ?>