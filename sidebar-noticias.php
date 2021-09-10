<?php 


$query = new WP_Query([
    "category_name" => "noticias",
    "posts_per_page" => 3,
    'post__not_in' => [get_the_ID()],
    'order' => 'DESC'
]);

echo '<div class="container-fluid p-0">
        <div class="row">
        <div class="col-12 mt-4 mt-lg-0">
            <h3>+ Notícias</h3>
        </div>
        ';
if($query->have_posts())
    while($query->have_posts()){
        $query->the_post();
        include "templates/sidebar/noticia.php";
    }

echo "</div></div>";
wp_reset_query();