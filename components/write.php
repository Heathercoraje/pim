<?php
?>
<div class="wrapper">
  <form class="form-login form-add" action="/components/process.php" method="post">
    <h2 class="form-login-heading text-center">Heather, what is new story? &#9787;</h2>
    <input type="text" class="form-control" name="name" placeholder="Name" required="" autofocus="" />
    <input type="text" class="form-control" name="year" placeholder="Year" required="" autofocus="" />
    <input type="text" class="form-control" name="title" placeholder="Keyword" required="" autofocus="" />
    <input type="text" class="form-control" name="keyword" placeholder="Keyword" required="" autofocus="" />
    <input type="text" class="form-control" name="image" placeholder="Image url" required="" autofocus="" />
    <textarea class="form-control"  cols="46" rows="5" name="desc" placeholder="Add description" required=""></textarea>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Add this to DB</button>
  </form>
</div>
