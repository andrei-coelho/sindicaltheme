<div class="container mt-2">
    <a href="<?php the_permalink(); ?>"><div class="row bg-white shadow">
        <div class="col-12 col-md-7 notice-style-capa" 
            style="background-image:url('<?php the_post_thumbnail_url('large'); ?>')">
        </div>
        <div class="col-12 col-md-5">
            <div class="row pt-4">
                <div class="col-6">
                    <span class="p-1 bg-primary text-light"><?php echo $category; ?></span>
                </div>
                <div class="col-6">
                    <p class="text-muted fs-6 text-end"><?php the_time('d/m/Y'); ?></p>
                </div>
            </div>
            <h1><?php the_title(); ?></h1>
            <h5 class="text-dark"><?php the_excerpt(); ?></h5>
        </div>
    </div></a>
</div>