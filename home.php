  <!DOCTYPE html>
  <?php session_start(); ?>
  <html lang="en">
    <head>
      <link rel="stylesheet" type = "text/css" href="home.css">
      <meta charset="utf-8">
      <title>Home</title>
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
        div{
          margin: auto;
          top: 50px;
        }
        .links {
            color: white;
            padding: 7px 10px;
            margin: 8px 0;
            cursor: pointer;
            text-align: center;
            outline: none;
            color: white;
            text-decoration: none;
            font-size: 13px;
        }
        .links:hover {
            opacity: 0.8;
        }
        .container {
          overflow-y: hidden;
        }
      </style>
    </head>
    <body>
      <div>
        <div class="navbar">
          <div id="menu">
            <a href="#" class="links  "><img src="logo.jpeg" alt="Pixels" width=30 height=30></a>
            <a href="about.html" class="links" id="about">About</a>
            <a href="basics.html" class="links">Basics</a>
            <a href="logout.php" class="links" id="logout" style="right: 0">Logout</a>
          </div>
        </div>
        <div class="container">
          <div class="item" style="font-size: 20px;">
            <?php echo "<div style='text-align: left; color:#0078d7;'> Hello ".$_SESSION['username'].",</div>";?><br>
            Photography is the art, application and practice of creating durable images by recording light or
            other electromagnetic radiation, either electronically by means of an image sensor, or chemically
            by means of a light-sensitive material such as photographic film. It is employed in many fields of
            science, manufacturing and business, as well as its more direct uses for art, film and video production,
            recreational purposes, hobby, and mass communication.

            Typically, a lens is used to focus the light reflected or emitted from objects into a real image on the
            light-sensitive surface inside a camera during a timed exposure. With an electronic image sensor, this
            produces an electrical charge at each pixel, which is electronically processed and stored in a digital
            image file for subsequent display or processing. The result with photographic emulsion is an invisible
            latent image, which is later chemically "developed" into a visible image, either negative or positive
            depending on the purpose of the photographic material and the method of processing. A negative image on
            film is traditionally used to photographically create a positive image on a paper base, known as a print,
            either by using an enlarger or by contact printing.
          </div>
          <div class="item2">
            <h1 style="color: #0078d7;">GENRES</h1>
          <div class="gallery">
            <a href="genres/landscape.php">
              <img src="Images/landscape.jpg" alt="Landscape" width="300" height="200">
            </a>
            <div class="desc">Landscape Photgraphy</div>
          </div>
          <div class="gallery">
            <a href="genres/fashion.php">
              <img src="Images/fashion.jpg" alt="Fashion" width="300" height="200">
            </a>
            <div class="desc">Fashion Photography</div>
          </div>
          <div class="gallery">
            <a href="genres/fineart.php">
              <img src="Images/fineart.jpg" alt="Fine Art" width="300" height="200">
            </a>
            <div class="desc">Fine Art Photography</div>
          </div>
          <div class="gallery">
            <a href="genres/architecture.php">
              <img src="Images/architecture.jpg" alt="Architecture" width="300" height="200">
            </a>
            <div class="desc">Architecture Photography</div>
          </div>
          <div class="gallery">
            <a href="genres/macro.php">
              <img src="Images/macro.jpg" alt="Macro" width="300" height="200">
            </a>
            <div class="desc">Macro Photography</div>
          </div>
          <div class="gallery">
            <a href="genres/wildlife.php">
              <img src="Images/wildlife.jpg" alt="Wildlife" width="300" height="200">
            </a>
            <div class="desc">Wildlife Photography</div>
          </div>
          <div class="gallery">
            <a href="genres/photojournalism.php">
              <img src="Images/photojournalism.jpg" alt="Photojournalism" width="300" height="200">
            </a>
            <div class="desc">Photojournalism</div>
          </div>
          <div class="gallery">
            <a href="genres/portraiture.php">
              <img src="Images/portraiture.jpg" alt="Portraiture" width="300" height="200">
            </a>
            <div class="desc">Portraiture</div>
          </div>
          <div class="gallery">
            <a href="genres/wedding.php">
              <img src="Images/wedding.jpg" alt="Wedding" width="300" height="200">
            </a>
            <div class="desc">Wedding</div>
          </div>
          </div>
        </div>
      </div>
    </body>
  </html>
