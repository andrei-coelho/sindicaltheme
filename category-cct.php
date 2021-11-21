<?php 

get_header();

$varsAPI = [
    "category_name" => "cct",
    "posts_per_page" => 2,
    'order' => 'DESC'
];

$template_item = '<div class="col-12 col-md-4">
    <div class="border rounded text-center py-3 m-1 bg-white">
        <img class="w-50 mx-auto d-block" src="'.get_bloginfo("template_url").'/img/ic-convencao-coletiva.png" alt="">
        <h5>${varObj.title}</h5>
        ${varObj.content}
    </div>
</div>';

$query = new WP_Query($varsAPI);

include "inc/post_list.php";

get_footer();