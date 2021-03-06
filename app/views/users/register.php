 <?php require APP_ROOT .'/views/includes/header.php'; ?>

 
    <div class="container">
        <div class="row">
        <div class="col-md-5 col-sm-9 mx-auto mt-5">
        
        <div class="card card-body bg-light">
        <h3 class="display-5 text-center">Create an Account</h3>
        <p class="lead text-center">please fill out the form to register with us</p>

        <form class="register px-4 mb-1" method="POST" action="<?php echo URL_ROOT;?>/users/register" class="needs-validation">

            <div class="form-group">
                <label for="name">Name: <sup>*</sup></label>
                <input type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" id="name" name="name" value="<?php echo $data['name']; ?>" >
                <span class="invalid-feedback"><?= $data['name_err']; ?></span>
            </div>


            <div class="form-group">
                <label for="email">Email: <sup>*</sup></label>
                <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?= $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?php echo $data['password']; ?>">
                <span class="invalid-feedback"><?= $data['password_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password: <sup>*</sup></label>
                <input type="password" class="form-control <?php echo (!empty($data['confirmPassword_err'])) ? 'is-invalid' : ''; ?>" id="confirmPassword" name="confirmPassword" value="<?php echo $data['confirmPassword']; ?>">
                <span class="invalid-feedback"><?= $data['confirmPassword_err']; ?></span>
            </div>
    
<!--             
             <div class="btn-group" role="group" aria-label="Basic example"> -->
            <button type="submit" class="btn btn-success" value="Register">Register</button>
            <button type="reset" class="ml-5 btn btn-danger">Reset</button>
           
        <!-- </div> -->
        </form>
             <a href="<?php echo URL_ROOT; ?>/users/login" class="link text-center mt-2">Have an account?  login</a>
            </div>
            </div>
        </div>

    </div>
    <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

<?php require APP_ROOT .'/views/includes/footer.php'; ?>