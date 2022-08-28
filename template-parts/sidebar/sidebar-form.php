<form action="<?php echo esc_url( home_url( '/filter/?test=test' ) ); ?>" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Search</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
    <h5>Employee Type</h5>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="contractcheck">
        <label class="form-check-label" for="contractcheck">
            Contract
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="fulltimecheck">
        <label class="form-check-label" for="fulltimecheck">
            Full-time
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="parttimecheck">
        <label class="form-check-label" for="parttimecheck">
            Part-time
        </label>
    </div>
    <button type="submit" class="btn btn-primary float-end">Submit</button>
</form>