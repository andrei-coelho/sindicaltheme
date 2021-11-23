<?php 

$atualPage = "noticias";

get_header();

$varsAPI = [
    "category_name" => "noticias",
    "posts_per_page" => 3,
    'order' => 'DESC'
];

$template_item = '<div class="col-12 col-md-4 p-0 ">
    <a class="p-0" href="${varObj.link}">
        <div class="shadow bg-white border m-2">
            <div class="notice-style-simple" 
                style="background-image:url(\'${varObj.image}\')">
            </div>
            <div class="row px-2 mt-2">
                <div class="col-6">
                    <span class="p-1 bg-primary text-light">${varObj.category}</span>
                </div>
            </div>
            <h3 class="px-2" style="min-height: 100px; max-height: 150px;">${varObj.title}</h3>
        </div>
    </a>
</div>';

$query = new WP_Query($varsAPI);

$categoryParent = "noticias";
$niceNameCateg  = "Notícias";

include "inc/post_list.php";

get_footer();
