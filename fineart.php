<?php
  if(isset($_POST['upload'])) {
    $target = "fineart/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO fineart (img) VALUES ('$target')";
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
    <title>FIne Art</title>
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
        <h1>Fine Art</h1>
        Fine-art photography is photography created in accordance with the vision of the artist as photographer.
        Fine art photography stands in contrast to representational photography, such as photojournalism, which provides
        a documentary visual account of specific subjects and events, literally re-presenting objective reality rather
        than the subjective intent of the photographer; and commercial photography, the primary focus of which is to
        advertise products or services.
      </div>
      <div class="images">
        <div class="gallery">
          <img src="fineart/1.jpg" alt="fineart" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fineart/2.jpg" alt="fineart" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fineart/3.jpg" alt="fineart" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fineart/4.jpg" alt="fineart" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fineart/5.jpeg" alt="fineart" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fineart/6.jpg" alt="fineart" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="fineart/7.jpg" alt="fineart" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM fineart";
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
      <form action="fineart.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
      </form>
    </div>
  </body>
</html>
