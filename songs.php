<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Our Favorite Songs</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header class='topnav' id='myTopnav'>
      <a href='index.html' class='bigname'><h3>GCP</h3></a>
      <nav>
        <ul class = 'navlinks'>
          <li><a href="resources.html">Resources</a></li>
          <li><a href="songs.html">Playlist</a></li>
          <li><a href="monthly.html">Monthly</a></li>
          <li><a href="weekly.html">Weekly</a></li>
          <li><a href="people.html">People</a></li>
        </ul>
      </nav>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class='fa fa-bars'></i>
      </a>
    </header>
    <div class="container">
      <h1 class = 'title'>Our Favorite Songs</h1>
      <div class='googleform'>
        <h2>Song Submission</h2>
        <p>Want to share a song with the group? Fill out this form and we'll post it here for everyone to see!</p>
          <a HREF="https://docs.google.com/forms/d/e/1FAIpQLSeP4qwx9T98TdgMqWTo3LgjzPXfaRn2FFLmK7Q7rexm2VdnBA/viewform?usp=sf_link">Send Submission</a>
        </br>
        <iframe src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS4QcI2VLzrTKLr9S3jcZfAXg9Rscw-DvqLwjV0oSDgfsGAzyYp_wSlbhx4pQjza7vaoyTHdEsmXwcb/pubhtml/sheet?headers=false&amp;gid=924454617&amp;range=B:C" width="400" height="350">
      </div>
    </iframe>

    <form action='MAILTO:nmb84@pitt.edu' method='post' enctype='text/plain'>
        <p>Want to share a song with us?</p>
        <input type="text" name="songname" placeholder="Song title">
        <br>
        <input type="text" name="genre">
        <br>
        <button type ='submit' name='button'>Submit</button>


    </form>
    </div>
    <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
    </script>
  </body>
</html>
