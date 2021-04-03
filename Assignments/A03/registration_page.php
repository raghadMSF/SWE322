<?php
include('./header.php');
echo '
<div class="w-50 py-5">
<h1>Registration Page</h1>
<form action="registration_action.php" method="post">
  <div class="mb-3">
    <label for="exampleInputusername1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputusername1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Regsiter</button>
</form>
</div>
';
include('./footer.php');