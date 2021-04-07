<?php

include('./header.php');
echo '
<div class="w-50 py-5">
<h1>Login Page</h1>
<form action="login_action.php" method="post" name="loginform" onsubmit="return validateLoginForm()">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
';

include('./footer.php');