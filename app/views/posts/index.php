 <?php require APP_ROOT .'/views/includes/header.php'; ?>

 <div class="container">
    <div class="row">
    <div class="col-md-6">
        <h1 class="display-3">Posts</h1>
    </div>
    <div class="col-md-6 clear-fix">
           <a href="<?php echo APP_ROOT; ?>/posts/add" class="btn btn-primary float-right mt-3 ">
           <i class="fa fa-pencil"></i>
           Add Post
           </a>
            
        </div>
    </div>
    <?php foreach( $data['posts'] as $post ): ?>
        <div class="card card-body mb-3">

            <h4 class="card-title"><?php echo $post->title; ?></h4>
            <div class="bg-light p-2 mb-3">
                written by <?php echo $post->name; ?> on <?php echo $post->postCreated; ?>
            </div>
            <p class="card-text"><?php echo $post->body; ?></p>
            <a href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $post->postId;?>" class="btn btn-dark">More</a>
        </div>
    
    <?php endforeach; ?>
     </div>


<?php require APP_ROOT .'/views/includes/footer.php'; ?>