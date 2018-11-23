<?php
  if(isset($_POST['upload'])) {
    $target = "architecture/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO architecture (img) VALUES ('$target')";
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
        <h1>Architecture</h1>
                Architectural photography is the photographing of buildings and similar structures that are both
                aesthetically pleasing and accurate representations of their subjects. Architectural photographers
                are usually skilled in the use of specialized techniques and cameras
                A tenet of architectural photography is the use of perspective control, with an emphasis on vertical lines
                that are non-converging (parallel). This is achieved by positioning the focal plane of the camera at so
                that it is perpendicular to the ground, regardless of the elevation of the camera eye. This result can be
                achieved by the use of view cameras, tilt/shift lenses, or post-processing.
                Traditionally, view cameras have been used for architectural photography as they allow for the lens
                to be tilted or shifted relative to the film plane. This allows for control of perspective, as well as
                a variety of creative possibilities.
                In a similar fashion to landscape photography, a deep depth of field is usually employed so that both the
                foreground and background (to infinity) are in sharp focus.
                More recently, digital single lens reflex (DSLR) cameras have been used in the field of architectural
                photography. These cameras also employ detachable, tilt-shift lenses of varying (usually fixed) focal
                lengths.
            </div>
              <div class="images">
                <div class="gallery">
                  <img src="architecture/1.jpg" alt="architecture" width="300" height="200">
                </div>
                <div class="gallery">
                  <img src="architecture/2.jpg" alt="architecture" width="300" height="200">
                </div>
                <div class="gallery">
                  <img src="architecture/3.jpg" alt="architecture" width="300" height="200">
                </div>
                <div class="gallery">
                  <img src="architecture/4.jpg" alt="architecture" width="300" height="200">
                </div>
                <div class="gallery">
                  <img src="architecture/5.jpg" alt="architecture" width="300" height="200">
                </div>
                <div class="gallery">
                  <img src="architecture/6.jpg" alt="architecture" width="300" height="200">
                </div>
                <div class="gallery">
                  <img src="architecture/7.jpg" alt="architecture" width="300" height="200">
                </div>
                <div class="gallery">
                  <img src="architecture/8.jpg" alt="architecture" width="300" height="200">
                </div>
                <?php
                $servername = "localhost";
                $username = "username";
                $password = "password";
                $dbname = "wtproject";

                // Creating connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $sql1 = "SELECT * FROM architecture";
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
              <form action="architecture.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" value="Select an image">
                <input type="submit" name="upload" value="Upload">
              </form>
            </div>
  </body>
</html>
