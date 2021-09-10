<?php 

    $query2 = new WP_Query([
        "category_name" => "campanha-salarial",
        "posts_per_page" => 1,
        'order' => 'DESC'
    ]);

    
    if($query2->have_posts()){
        $query2->the_post();
?>


<div class="col-12 col-lg-4 p-0 ">

    <a href="<?php the_permalink(); ?>">
    
        <div class="bg-secondary p-2 mt-2">

            <div class="bg-img-not bg-img-noticia-campanha-salarial" 
                 style="background-image:url('<?php the_post_thumbnail_url('large'); ?>');">
                
                 <div class="bg-degrade-black bg-img-noticia-campanha-salarial"
                    style="background-image:url('<?php bloginfo('template_url') ?>/img/bg-degrade-black.png');">
                
                    <h5 class="bg-primary text-tertiary p-2 text-center" style="opacity: 90%;">CAMPANHA SALARIAL</h5>
                    <div class="separador w-100">

                    </div>
                    <h3 class="text-light p-2">
                    <?php the_title(); ?>
                    </h3>
                
                </div>
                

            </div>

        </div>
        
    </a>

</div>
<?php } wp_reset_query(); ?>