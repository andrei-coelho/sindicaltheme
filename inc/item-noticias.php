<div class="col-12 col-md-4  p-0  ">
    <a class="p-0" href="<?php the_permalink(); ?>">
        <div class="shadow bg-white border m-2">
            <div class="notice-style-simple" 
                style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
            </div>
            <div class="row px-2 mt-2">
                <div class="col-6">
                    <span class="p-1 bg-primary text-light"><?php echo $categorySlug; ?></span>
                </div>
                <div class="col-6">
                    <p class="text-muted fs-6 text-end"><?php the_time('d/m/Y'); ?></p>
                </div>
            </div>
            <h3 class="px-2" style="min-height: 100px; max-height: 150px;"><?php the_title(); ?></h3>
        </div>
    </a>
</div>