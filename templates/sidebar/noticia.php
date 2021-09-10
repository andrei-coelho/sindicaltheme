<div class="col-12  p-0">
    <a class="p-0" href="<?php the_permalink(); ?>">
        <div class="shadow bg-white border m-2">
            <div class="notice-style-simple" 
                style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
            </div>
            <div class="row px-2 mt-2">
                <div class="col-6">
                    <span class="p-1 bg-primary text-light"><?php 
                        $cats = get_the_category();
                        $catI = count($cats)-1;
                        echo $cats[$catI]->name;
                    ?></span>
                </div>
                <div class="col-6">
                    <p class="text-muted fs-6 text-end"> <small> <?php the_time('d/m/Y'); ?></small></p>
                </div>
            </div>
            <h5 class="px-2" style="min-height: 100px;"><?php the_title(); ?></h5>
        </div>
    </a>
</div>

