<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type = "text/css" href="signin.css">
    <style media="screen">

      html, body {
        width: 100%;
        height: 100%;
        font-family: sans-serif;
        font-size: 0.8em;
      }
      body {
        display: flex;
        background-image: url(photography-wallpaper-8.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-blend-mode: lighten;
      }
      form {
        margin: auto;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <form method="POST" action="signin.php">
  <div class="container">
    <h1>Sign In</h1>
    <input type="text" placeholder="Username" name="unamel" required><br>
    <input type="password" placeholder="Password" name="pswl" required><br>
    <?php echo $passwordemailerror; ?><br>
<br>
    <button type="submit" name="login" style="margin-left: 70px">Login</button>
  </div>
  <div class="container">
    No account?<a href="signup.php" class="links"> Create one!</a>

  </div>
</form>
  </body>
</html>
