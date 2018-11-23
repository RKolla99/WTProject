<?php
  if(isset($_POST['upload'])) {
    $target = "wedding/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO wedding (img) VALUES ('$target')";
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
    <title>Wedding</title>
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
        <h1>Wedding</h1>
        Wedding photography is the photography of activities relating to weddings. It encompasses photographs of the couple before marriage (for announcements, portrait displays, or thank you cards) as well as coverage of the wedding and reception (sometimes referred to as the wedding breakfast in non-US countries). It is a major branch of commercial photography, supporting many specialists.

During the film era, photographers favored color negative film and medium-format cameras, especially by Hasselblad. Today, many more weddings are photographed with digital SLR cameras as the digital convenience provides quick detection of lighting mistakes and allows creative approaches to be reviewed immediately.

In spite of this trend, some photographers continue to shoot with film as they prefer the film aesthetic, and others are of the opinion that negative film captures more information than digital technology, and has less margin for exposure error. Certainly true in some cases, exposure latitude inherent in a camera's native Raw image format (which allows for more under- and over- exposure than JPEG) varies from manufacturer to manufacturer. All forms of RAW have a degree of exposure latitude which exceeds slide film - to which digital capture is commonly compared.

The introduction of ILC (interchangeable lens cameras) mirrorless camera such as the Fuji XT-2 and the Sony A7 series in 2015 / 2016 is a game changer for the PJ wedding photographer. With the Introduction of the Nikon D5 it is now possible to capture images in very low light, without the use of a flash.
      </div>
      <div class="images">
        <div class="gallery">
          <img src="wedding/1.jpg" alt="wedding" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wedding/2.jpg" alt="wedding" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wedding/3.jpg" alt="wedding" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wedding/4.jpg" alt="wedding" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wedding/5.jpg" alt="wedding" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wedding/6.jpg" alt="wedding" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wedding/7.jpg" alt="wedding" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="wedding/8.jpg" alt="wedding" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM wedding";
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
      <form action="wedding.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
      </form>
    </div>
  </body>
</html>
