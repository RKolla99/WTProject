<?php
  if(isset($_POST['upload'])) {
    $target = "portraiture/".basename($_FILES['image']['name']);

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "wtproject";

    // Creating connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO portraiture (img) VALUES ('$target')";
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
    <title>Portraiture</title>
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
        <h1>Portaraiture</h1>
        Portrait photography or portraiture in photography is a photograph of a person or group of people that captures the personality of the subject by using effective lighting, backdrops, and poses. A portrait picture might be artistic, or it might be clinical, as part of a medical study. Frequently,

portraits are commissioned for special occasions, such as portraitures or school events. Portraits can serve many purposes, from usage on a personal Web site to display in the lobby of a business.
      </div>
      <div class="images">
        <div class="gallery">
          <img src="portraiture/1.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/2.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/3.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/4.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/5.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/6.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/7.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/8.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/9.jpg" alt="portraiture" width="300" height="200">
        </div>
        <div class="gallery">
          <img src="portraiture/10.jpg" alt="portraiture" width="300" height="200">
        </div>
        <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "wtproject";

        // Creating connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql1 = "SELECT * FROM portraiture";
        $result = mysqli_query($conn, $sql1);
        while($row = mysqli_fetch_assoc($result)) {
          echo "<div class='gallery new'>";
          echo "<img src='".$row['img']."' width='300' height='200'>";
          echo "</div>";
        }
        mysqli_close($conn);
        ?>
      </div>
    </div>
    <div class="form">
      <form action="portraiture.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="Select an image">
        <input type="submit" name="upload" value="Upload">
        <input type="button" onclick="dele()" value="Delete">
      </form>
    </div>
<script type="text/javascript">
function dele(){
  var image=document.querySelector('.new').remove()
}
</script>
  </body>
</html>
