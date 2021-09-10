<?php 

    $query2 = new WP_Query([
        "category_name" => "blog-do-presidente",
        "posts_per_page" => 1,
        'order' => 'DESC'
    ]);

    if($query2->have_posts()){
        $query2->the_post();

?>

<div class="container-fluid bg-white p-2 border rounded my-2">
    
    <div class="row py-1">

        <div class="col-12 col-md-3">
            <img class="w-100 d-block mx-auto" style="max-width: 100px;" src="<?php bloginfo('template_url')  ?>/img/header-blog-presidente.png" alt="">
        </div>

        <div class="col-12 col-md-9">
            <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none link-blog">
                <h5 style="min-height: 60px;" class="mt-1"><?php the_title(); ?></h5>
            </a>
            <p class="text-center text-md-start text-primary font-weight-bold">Marcio Cruz (Bob)</p>
        </div>

    </div>

</div>

<?php } wp_reset_query(); ?>