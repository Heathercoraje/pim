<?php
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pim");
  $name = $_POST['name'];
  $title =  $_POST['title'];
  $year = $_POST['year'];
  $keyword = $_POST['keyword'];
  $image = $_POST['image'];
  $description = $_POST['desc'];
  $sql = "INSERT INTO people (name, title, description, year, keyword, image) VALUES ('$name',  '$title', '$description', '$year', '$keyword', '$image')";
  $result = mysqli_query($conn, $sql);
  header('Location:/public/index.php');
?>
