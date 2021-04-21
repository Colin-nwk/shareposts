 <?php require APP_ROOT .'/views/includes/header.php'; ?>

 
 <div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-9 mx-auto mt-5">

            <div class="card card-body bg-light">
                <?php flash('register_success'); ?>
                <h3 class="display-5 text-center">Login to your Account</h3>
                <p class="lead text-center">please fill your credentials to login</p>
                <form class="register px-4" method="post" action="<?php echo URL_ROOT; ?>/users/login">

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


                    <button type="submit" class="btn btn-success btn-block" value="Login">Login</button>
                    
                    <br>
                    
                    <!-- </div> -->
                </form>
                <a href="<?php echo URL_ROOT; ?>/users/register" class="link text-center">Don't have an account?  Register</a>
            </div>
        </div>
    </div>
</div>


<?php require APP_ROOT .'/views/includes/footer.php'; ?>