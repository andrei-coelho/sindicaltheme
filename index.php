<?php 
    
    get_header();

    $campanha_salarial_status = true;
    
    $destaque = false;
    $init = false;
    $quant = (!$campanha_salarial_status ? 4 : 3);
    $typeP = $quant == 4 ? "inc/post_simple_small.php" : "inc/post_simple_mid.php";

    $query = new WP_Query([
        "category_name" => "noticias",
        "posts_per_page" => $quant,
        'order' => 'DESC'
    ]);

    $noticias = [];
    $capa     = [];

    while($query -> have_posts()):

        $query->the_post();
        $cats = get_the_category();
        $catI = count($cats)-1;
        $category = $cats[$catI]->name;

        if(!$destaque){
            
            $destaque = true;
            $capa     = [
                "link"  => get_the_permalink(),
                "title" => get_the_title(),
                "image" => get_the_post_thumbnail_url(),
                "descr" => get_the_excerpt(),
                "data"  => get_the_time('d/m/Y'),
                "categ" => $category
            ];
            continue;
        }

        $noticias[] = [
            "link"  => get_the_permalink(),
            "title" => get_the_title(),
            "image" => get_the_post_thumbnail_url(),
            "data"  => get_the_time('d/m/Y'),
            "categ" => $category
        ];
     
        if(!$init){
            echo '';
            $init = true;
        }

    endwhile; 

    wp_reset_query();

    // insere a capa 
    include("inc/post_destaque.php");

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php include "inc/blog_last.php"; ?>
            </div>
            <div class="col-12 col-md-6">
                <?php include "inc/eventos_last.php"; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row py-3">
            <?php
                foreach ($noticias as $not) {
                    include $typeP;
                }
                if($campanha_salarial_status){
                    include 'inc/campanha_salarial_last.php';
                } else {
                    // inclui dowload da ultima convenção coletiva de trabalho
                }
            ?>
        </div>
    </div>

<?php get_footer(); 


