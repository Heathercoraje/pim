<div class="wrapper">
  <form class="form-login" action="/components/verifyUser.php" method="post">
    <h2 class="form-login-heading text-center">Please verify</h2>
    <p class="text-center">Only admin can modify or add data </p>
    <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
    <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Verify</button>
  </form>
</div>
