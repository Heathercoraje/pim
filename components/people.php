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
    <link rel="stylesheet" href="../public/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto+Slab:400,700" rel="stylesheet">

  </head>
    <body>
      <div class="container-fluid">
        <div class="col-md-3 left-nav">
          <header>
            <h1 class="title"><a href="public/index.php">People<br />
            I've Met</a></h1>
          </header>
          <nav>
            <ol>
              <?php
                echo file_get_contents('list.php');
              ?>
            </ol>
         </nav>
          <a href="/public/index.php?id=login"><button class="btn btn-primary add-button">Add a new story &#9997;</button></a>
          <footer>
            <p class="credit">Copyright © 2018  All rights reserved. <br />
            Heathercoraje rocks, oh she really does.</p>
          </footer>
       </div>
       <div class="col-md-9 right-content" id="right-content">
          <article id="article">
            <?php
               while($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $title =  $row['title'];
                $desc =  $row['description'];
                $keyword= $row['keyword'];
                $image= $row['image'];
                echo "<div class='col-md-4'><div class='people-container'><h3><strong>$name</strong></h3>
                      <img class='people-pic' src='$image'/><p><strong>$title</strong></p><p class='desc'>$desc</p>
                      <p><strong>#$keyword</strong></p>
                      </div></div>";
               }
            ?>
          </article>
        </div>
     </div>
      <script>
      document.getElementById('right-content').classList.add('scroll');
      document.getElementById('right-content').classList.add('noBase');
      </script>
    </body>
</html>
