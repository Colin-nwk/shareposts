

<?php require APP_ROOT .'/views/includes/header.php'; ?>


<div class="container">

	<div class="row">
		<div class="col-md-8 col-sm-10 mx-auto mt-5">
			<a class="btn link active my-4" href="<?php echo URL_ROOT; ?>/posts"><i class="fas fa-backward"></i> back</a>
			<div class="card card-body bg-light">

				<h3 class="display-5 text-center">Edit Post</h3>
				<p class="lead text-center">Edit an existing post</p>
				<form class="register px-4" method="post" action="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['id']; ?>" >

					<div class="form-group">
						<label for="title">Title: <sup>*</sup></label>
						<input type="text" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" id="title" name="title" value="<?php echo $data['title']; ?>">
						<span class="invalid-feedback"><?= $data['title_err']; ?></span>
					</div>
					<div class="form-group">
						<label for="body">Body text: <sup>*</sup></label>
						<textarea  class="form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" id="body" name="body"><?php echo $data['body']; ?></textarea>
						<span class="invalid-feedback"><?= $data['body_err']; ?></span>
					</div>



					<button type="submit" class="btn btn-success" value="Login">Submit</button>

					<br>
					<br>

					<!-- </div> -->
				</form>
			</div>
		</div>
	</div>
</div>

<?php require APP_ROOT .'/views/includes/footer.php'; ?>