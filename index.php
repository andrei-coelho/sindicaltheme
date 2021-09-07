<?php 
    
    get_header();

   
    $campanha_salarial_status = true;
    

    $destaque = false;
    $init = false;
    $quant = (!$campanha_salarial_status ? 4 : 3);
    $typeP = $quant == 4 ? "inc/post_simple_small.php" : "inc/post_simple_mid.php";

    $query = new WP_Query( [
        "category_name" => "noticias",
        "posts_per_page" => $quant,
        'order' => 'DESC'
    ]);

    while($query -> have_posts()):

        $query->the_post();
        $cats = get_the_category();
        $catI = count($cats)-1;
        $category = $cats[$catI]->name;

        if(!$destaque){
            include("inc/post_destaque.php");
            $destaque = true;
            continue;
        }
     
        if(!$init){
            echo '<div class="container">
            <div class="row py-3">';
            $init = true;
        }
       
        include($typeP );

    endwhile; 

    // insere a campanha salarial post

    if($campanha_salarial_status){
        $ano = date('Y');
        include('inc/campanha_salarial_last.php');
    }


    if($init)
    echo "</div></div>";

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

    <?php

    wp_reset_postdata();
    
    get_footer(); 


