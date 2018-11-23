<?php
  if(isset($_POST['upload'])) {
    $target = "fashion/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO fashion (img) VALUES ('$target')";
    mysqli_query($conn, $sql);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    mysqli_close($conn);
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Fashion</title>
    <style media="screen">
      html, body {
        width: 100%;
        height: 100%;
        font-family: sans-serif;
        font-size: 0.8em;
        overflow-x: hidden;
      }
      html {
        overflow-y: hidden;
      }
    </style>
  </head>
  <body>
    <div class="navbar">
      <div id="menu">
        <a href="../home.php" class="links  "><img src="../logo.jpeg" alt="Pixels" width=30 height=30></a>
        <a href="../about.html" class="links" id="about">About</a>
        <a href="../basics.html" class="links">Basics</a>
        <a href="../logout.php" class="links" id="logout" style="right: 0">Logout</a>
      </div>
    </div>
    <div class="container">
      <div class="item" style="font-size: 20px;">
        <h1>Fashion</h1>
          Fashion photography is a genre of photography which is devoted to displaying clothing and other fashion items.
          Fashion photography is most often conducted for advertisements or fashion magazines such as Vogue, Vanity Fair,
          or Elle. Fashion photography has developed its own aesthetic in which the clothes and fashions are enhanced by
          the presence of exotic locations or accessories.
      </div>
      <div class="images">
        <div class="gallery">
          <img src="fashion/1.jpg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/2.jpg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/3.jpg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/4.jpg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/5.jpg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/6.jpeg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/7.jpeg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/8.jpg" alt="fashion" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fashion/9.jpg" alt="fashion" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM fashion";
        $result = mysqli_query($conn, $sql1);
        while($row = mysqli_fetch_assoc($result)) {
          echo "<div class='gallery'>";
          echo "<img src='".$row['img']."' width='300' height='200'>";
          echo "</div>";
        }
        mysqli_close($conn);
        ?>
      </div>
    </div>
    <div class="form">
      <form action="fashion.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
      </form>
    </div>
  </body>
</html>
