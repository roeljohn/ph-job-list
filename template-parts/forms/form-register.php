<form class="row g-3" action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post">
    <input type="hidden" name="action" value="add_new_user908">
  <div class="col-md-6">
    <label for="inputFirstName" class="form-label">First Name</label>
    <input type="text" id="inputFirstName" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col-md-6">
    <label for="inputLastName" class="form-label">Last Name</label>
    <input type="text" id="inputLastName" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="exampleFormControlTextarea1" class="form-label">Profile Info</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <input type="submit" value="Register" tabindex="6" id="submit" name="submit" />
  </div>
</form>