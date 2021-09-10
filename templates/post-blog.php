<?php 
    
    if(have_posts()): 
        the_post();  
    
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <?php include "header-blog.php"; ?>
            <h1><?php the_title(); ?></h1>
            <span><?php the_time('d/m/Y'); ?></span>
            <hr>
            <div class="fs-5 mt-3"><?php the_content(); ?></div>
            <hr>
        </div>
        <div class="col-12 col-lg-4">
            <?php get_sidebar('blog'); ?>
        </div>
    </div>
</div>

<?php endif; ?>