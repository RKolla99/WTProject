<?php include('server.php')  ?>
<!DOCTYPE html>
<html>
<head>
  <style media="screen">
    form {
      margin: auto;
    }
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
  </style>
<link rel="stylesheet" href="signup.css">
<body>
  <form action="signup.php" method="post">
  <div class="container">
    <h1>Create Account</h1>
    <input type="text" placeholder="Username" name="username" required><br>
    <?php echo $usernameerror; ?><br>
    <input type="email" placeholder="Email" name="email" required><br>
    <?php echo $emailerror; ?><br>
    <input type="password" placeholder="Password" name="psw" minlength=8 required><br>
    <input type="password" placeholder="Re-confirm Password" name="psw-repeat" required><br>
    <?php echo $passwordmatcherror; ?><br>
  </div>
    <div class="container">
      <button type="submit" name="sub" class="signupbtn" style="margin-left: 60px">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
