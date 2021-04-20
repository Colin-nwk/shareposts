<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container">
  <a class="navbar-brand" href="<?php echo URL_ROOT; ?>"><?php echo SITENAME; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_ROOT; ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_ROOT; ?>/pages/about">About</a>
      </li>

      <?php if(isset($_SESSION['user_id'])) : ?>
        
        <li class="nav-item ml-3">
        <a class="btn btn-outline-dark" href="<?php echo URL_ROOT; ?>/users/logout">logout</a>
      </li>

      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_ROOT; ?>/users/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URL_ROOT; ?>/users/register">Signup</a>
      </li>
      <?php endif; ?>
     
    </ul>
  </div>
  </div>
</nav>