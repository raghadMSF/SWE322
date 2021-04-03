<?php
include('./header.php');
echo '
<div class="w-50 py-5">
<h1>Change Password</h1>
<form action="change_password_action.php" method="post">
  <div class="mb-3">
    <label for="exampleInputusername1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputusername1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Old Password</label>
    <input type="password" name="old_password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">New Password</label>
    <input type="password" name="new_password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm New Password</label>
    <input type="password" name="new_password2" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Edit password</button>
</form>
</div>
';
include('./footer.php');