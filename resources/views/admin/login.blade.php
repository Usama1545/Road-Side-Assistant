<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form action="login" method="POST">
  @csrf <!-- Add this line to include the CSRF token -->
  <!-- Email input -->
  <div class="form-outline mb-6">
    <label class="form-label" for="form3Example3">Email address</label>
    <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-3">
    <label class="form-label" for="form3Example4">Password</label>
    <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
  </div>

  <div class="d-flex justify-content-between align-items-center">
    <!-- Checkbox -->
    <div class="form-check mb-0">
      <label class="form-check-label" for="form2Example3">
        Remember me
      </label>
      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
    </div>
  </div>

  <div class="text-center text-lg-start mt-4 pt-2">
    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
  </div>
</form>
      </div>
    </div>
  </div>
 
</section>