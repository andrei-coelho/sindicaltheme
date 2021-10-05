<?php 

if(have_posts()): 
    the_post();

?>

<div class="container">

    <div class="row p-3 bg-white mt-3 border">

        <?php if(get_the_post_thumbnail_url() != ""): ?>
        
        <div class="col-12">
            
            <img class="w-100" src="<?php get_the_post_thumbnail_url() ?>">   
                     
        </div>

        <?php endif; ?>

        <div class="col-12 my-4">
             <span class="p-3 bg-primary text-white fs-4"><?php echo get_the_excerpt(); ?></span>
        </div>
        <div class="col-12">
            <h1><?php the_title();  ?></h1>
        </div>

        <div class="col-12">
        <?php the_content();  ?>
        </div>

    </div>

</div>

<?php endif; ?>