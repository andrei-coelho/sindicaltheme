
<?php 
    if(have_posts()): 
    the_post();  
    $cats = get_the_category();
    $catI = count($cats)-1;
    $category = $cats[$catI]->name;
?>
<div class="container">

    <div class="row pt-3">
        
        <div class="col-12 col-lg-9 text-center">

            <span class="bg-primary p-1 text-white mx-auto"><?php echo $category; ?></span>
            <h1><?php the_title(); ?></h1>
            <h5><?php the_excerpt(); ?></h5>
            
            <hr>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-12">
                        <span><?php the_time('d/m/Y'); ?></span>
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
            <hr>

            <img class="w-100" src="<?php the_post_thumbnail_url() ?>" alt="">
            <div class="text-start mt-3 fs-5"><?php the_content(); ?></div>
        
        </div>

        <div class="col-12 col-lg-3">
            <?php get_sidebar('noticias'); ?>
        </div>

    </div>

</div>
<?php 
    wp_reset_query();
    endif; 
?>

