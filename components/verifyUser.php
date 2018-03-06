<?php
  $conn = mysqli_connect('localhost','root', '');
  mysqli_select_db($conn, 'pim');
  $name = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $sql = "SELECT * FROM user WHERE name='$name'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if ($row['name'] === $name && $row['password'] === $password) {
    echo '<script type="text/javascript">';
    echo 'alert("Welcome Heathercoraje");';
    echo 'window.location.href = "/public/index.php?id=write";';
    echo '</script>';
  }
  else {
    echo '<script type="text/javascript">';
    echo 'alert("Please check your Username/Password again");';
    echo 'window.location.href = "/public/index.php?id=login";';
    echo '</script>';
  }
?>
