<?php

include('./header.php');
echo '
<div class="w-50 py-5">
<h1>Create Profile Page</h1>
<form action="create_profile_action.php" method="post" name="profileformx" onsubmit="return validateProfileForm()">
  <div class="mb-3">
    <label for="first_name" class="form-label">First Name</label>
    <input type="text" name="first_name" class="form-control" id="first_name">
  </div>
  <div class="mb-3">
    <label for="last_name" class="form-label">Last Name</label>
    <input type="text" name="last_name" class="form-control" id="last_name">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Contact phone</label>
    <input type="number" name="phone" class="form-control" id="phone">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Contact email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="country" class="form-label">country</label>
    <input type="text" name="country" class="form-control" id="country">
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">city</label>
    <input type="text" name="city" class="form-control" id="city">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
';

include('./footer.php');