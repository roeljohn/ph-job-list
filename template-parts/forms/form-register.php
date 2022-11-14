<form class="row g-3" action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post">
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>    
<?php return  check_register_user_error(); ?>
<input type="hidden" name="action" value="add_new_user908">
  <div class="col-md-6">
    <label for="inputFirstName" class="form-label">First Name</label>
    <input type="text" name="userFirstName" id="inputFirstName" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col-md-6">
    <label for="inputLastName" class="form-label">Last Name</label>
    <input type="text" name="userLastName" id="inputLastName" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="userEmail" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name="userPassword" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-12">
    <label for="inputLastName" class="form-label">Username</label>
    <input type="text" name="userName" id="inputLastName" class="form-control" placeholder="Username" aria-label="Username">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" name="userAddress" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="exampleFormControlTextarea1" class="form-label">Profile Info</label>
    <textarea name="userProfileInfo" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  <div class="col-12">
    <div class="form-check">
      <input name="userAgreement" class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <input type="submit" value="Register" tabindex="6" id="submit" name="submit" />
  </div>
</form>