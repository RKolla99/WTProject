<?php
  if(isset($_POST['upload'])) {
    $target = "wildlife/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO wildlife (img) VALUES ('$target')";
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
      html{
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
        <h1>Wildlife</h1>
        Wildlife photography is a genre of photography concerned with documenting various forms of wildlife in their natural habitat.

As well as requiring photography skills, wildlife photographers may need field craft skills. For example, some animals are difficult to approach and thus a knowledge of the animal's behavior is needed in order to be able to predict its actions. Photographing some species may require stalking skills or the use of a hide/blind for concealment.

While wildlife photographs can be taken using basic equipment, successful photography of some types of wildlife requires specialist equipment, such as macro lenses for insects, long focal length lenses for birds and underwater cameras for marine life. However, a great wildlife photograph can also be the result of being in the right place at the right time and often involves a good understanding of animal behavior in order to anticipate interesting situations to capture in photography.
      </div>
      <div class="images">
        <div class="gallery">
          <img src="wildlife/1.jpeg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/2.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/3.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/4.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/5.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/6.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/7.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/8.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/9.jpg" alt="wildlife" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wildlife/10.jpg" alt="wildlife" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM wildlife";
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
      <form action="wildlife.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
      </form>
    </div>

  </body>
</html>
