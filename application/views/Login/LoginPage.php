<html>
 <head>
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/Login/style.css')?>">
 </head>
 <body>
  <div class="login">
   <h2 class="login-header">Form Login</h2>
   <form class="login-container" action="<?= base_url() ?>Login/aksi_login" method="POST">
    <p>
     <input type="email" placeholder="Email" name="email" />
    </p>
    <p>
     <input type="password" placeholder="Password" name="password" />
    </p>
    <p>
     <input type="submit" placeholder="Login" />
    </p>
   </form>
  </div>
 </body>
</html>
