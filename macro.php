<?php
  if(isset($_POST['upload'])) {
    $target = "macro/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO macro (img) VALUES ('$target')";
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
        <h1>Macro</h1>
        Macro photography, is extreme close-up photography, usually of very small subjects and living organisms like insects, in which the size of the subject in the photograph is greater than life size (though macrophotography technically refers to the art of making very large photographs).[3][5] By the original definition, a macro photograph is one in which the size of the subject on the negative or image sensor is life size or greater.[6] However, in some uses it refers to a finished photograph of a subject at greater than life size.[7]

The ratio of the subject size on the film plane (or sensor plane) to the actual subject size is known as the reproduction ratio. Likewise, a macro lens is classically a lens capable of reproduction ratios of at least 1:1, although it often refers to any lens with a large reproduction ratio, despite rarely exceeding 1:1
      </div>
      <div class="images">
        <div class="gallery">
          <img src="macro/1.jpg" alt="macro" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="macro/2.jpg" alt="macro" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="macro/3.jpg" alt="macro" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="macro/4.jpg" alt="macro" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="macro/5.jpeg" alt="macro" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="macro/6.jpg" alt="macro" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="macro/7.jpg" alt="macro" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM macro";
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
      <form action="macro.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
      </form>
    </div>
  </body>
</html>
