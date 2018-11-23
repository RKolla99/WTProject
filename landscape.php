<?php
  if(isset($_POST['upload'])) {
    $target = "landscape/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO landscape (img) VALUES ('$target')";
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
    <title>Landscape</title>
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
        <h1>LANDSCAPE</h1>
          Landscape photography shows spaces within the world, sometimes vast and unending, but other times microscopic.
          Landscape photographs typically capture the presence of nature but can also focus on man-made features or
          disturbances of landscapes.
          Landscape photography is done for a variety of reasons. Perhaps the most common is to recall a personal observation
          or experience while in the outdoors, especially when traveling. Others pursue it particularly as an outdoor
          lifestyle, to be involved with nature and the elements, some as an escape from the artificial world.
          Many landscape photographs show little or no human activity and are created in the pursuit of a pure,
          unsullied depiction of nature, devoid of human influence—instead featuring subjects such as strongly defined
          landforms, weather, and ambient light. As with most forms of art, the definition of a landscape photograph is
          broad and may include rural or urban settings, industrial areas or nature photography.
      </div>
      <div class="images">
        <div class="gallery">
          <img src="landscape/1.jpg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/2.jpg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/3.jpg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/4.jpg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/5.jpg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/6.jpeg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/7.jpg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/8.jpg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/9.jpeg" alt="Landscape" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="landscape/10.jpg" alt="Landscape" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM landscape";
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
      <form action="landscape.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
      </form>
    </div>
  </body>
</html>
