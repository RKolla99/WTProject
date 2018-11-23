<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
      session_start();
      session_destroy();
      unset($_SESSION['username']);
      header("location: signin.php");
    ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
