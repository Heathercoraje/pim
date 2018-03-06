<?php
  $conn = mysqli_connect('localhost', 'root', ''); // variable to open and connect to my db
  mysqli_select_db($conn, 'pim'); //select database
  $result = mysqli_query($conn, "SELECT * FROM people");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>People I've met</title>
    <script
    src="https://code.jquery.com/jquery-1.12.4.js"
    integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto+Slab:400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>
    <body>
      <div class="container-fluid">
       <div class="col-md-3 left-nav">
          <header>
            <h1 class="title"><a href="/public/index.php">People<br />
            I've Met</a></h1>
          </header>
          <nav>
            <ol>
              <?php
                echo file_get_contents("../components/list.php");
              ?>
            </ol>
         </nav>
          <a href="/public/index.php?id=login"><button class="btn btn-primary add-button">Add a new story  &#9997;</button></a>
          <footer>
            <p class="credit">Copyright © 2018  All rights reserved. <br />
            Heathercoraje rocks, oh she really does.</p>
          </footer>
       </div>
       <div class="col-md-9 right-content" id="right-content">
          <article id="article">
            <?php
              if(empty($_GET['id']) === false) {
               echo file_get_contents("../components/".$_GET['id'].".php");
               echo '<script type="text/javascript">';
               echo 'document.getElementById("article").className="noBase"';
               echo '</script>';
              }
              else {
               echo '<script type="text/javascript">';
               echo 'document.getElementById("article").className="base"';
               echo '</script>';
              }
            ?>
          </article>
        </div>
     </div>
   </body>

</html>
