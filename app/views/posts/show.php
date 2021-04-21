 <?php require APP_ROOT .'/views/includes/header.php'; ?>

 <div class="container clearfix">

  <a class="btn link active my-4" href="<?php echo URL_ROOT; ?>/posts"><i class="fas fa-backward"></i> back</a>

  <br>

  <h1 class="display-3"><?php echo $data['post']->title; ?></h1>
  <div class="bg-secondary text-white p-2 mb-3">

    Written by <?php echo $data['user']->name ?> on <?php echo $data['post']->created_date; ?>
  </div>

  <p><?php echo $data['post']->body; ?></p>

  <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>

    <hr>
    <a href="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark"> <i class="fas fa-edit"></i>  Edit</a>

    <form action="<?php echo URL_ROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" class="float-right">
      <button type="submit" name="delete" class="btn btn-danger" value="delete">
        <i class="fas fa-times"></i>  Delete
      </button>
    </form>
  <?php endif; ?>


</div>



<?php require APP_ROOT .'/views/includes/footer.php'; ?>
