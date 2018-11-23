<?php
  if(isset($_POST['upload'])) {
    $target = "photojournalism/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO photojournalism (img) VALUES ('$target')";
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
        <h1>Photojournalism</h1>
        Photojournalism is a particular form of journalism (the collecting, editing, and presenting of news material for
        publication or broadcast) that employs images in order to tell a news story. It is now usually understood to refer
        only to still images, but in some cases the term also refers to video used in broadcast journalism. Photojournalism
        is distinguished from other close branches of photography (e.g., documentary photography, social documentary
        photography, street photography or celebrity photography) by complying with a rigid ethical framework which demands
        that the work be both honest and impartial whilst telling the story in strictly journalistic terms. Photojournalists
        create pictures that contribute to the news media, and help communities connect with one other. Photojournalists must
        be well informed and knowledgeable about events happening right outside their door. They deliver news in a creative
        format that is not only informative, but also entertaining.
        The images have meaning in the context of a recently published record of events.
        The situation implied by the images is a fair and accurate representation of the events they depict in both content
        and tone.
        The images combine with other news elements to make facts relatable to audiences.
        Like a writer, a photojournalist is a reporter, but he or she must often make decisions instantly and carry
        photographic equipment, often while exposed to significant obstacles (e.g., physical danger, weather, crowds,
        physical access).
      </div>
      <div class="images">
        <div class="gallery">
          <img src="photojournalism/1.jpg" alt="photojournalism" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="photojournalism/2.jpg" alt="photojournalism" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="photojournalism/3.jpg_large" alt="photojournalism" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="photojournalism/4.jpg" alt="photojournalism" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="photojournalism/5.jpeg" alt="photojournalism" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="photojournalism/6.jpg" alt="photojournalism" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="photojournalism/7.jpg" alt="photojournalism" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="photojournalism/8.jpg" alt="photojournalism" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM photojournalism";
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
      <form action="photojournalism.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
      </form>
    </div>
  </body>
</html>
