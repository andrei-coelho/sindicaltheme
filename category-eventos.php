<?php 

$atualPage = "eventos";

get_header();

$varsAPI = [
    "category_name" => "eventos",
    "posts_per_page" => 1,
    'order' => 'DESC'
];

$template_item = '<div class="container-fluid p-0 mt-2">
    <div class="row text-white ">
        <div class="col-3 bg-primary py-4">
            <h1 class="text-center">${varObj.dia}<br>${varObj.mes}<br>${varObj.ano}</h1>
        </div>
        <div class="col-9 bg-secondary">
            <a class="link-tertiary" href="${varObj.link}">
                <h5 class="text-tertiary mt-2">Evento</h5>
                <h3>${varObj.title}</h3>
            </a>
        </div>
    </div>
</div>';

$query = new WP_Query($varsAPI);

include "inc/post_list.php";

get_footer();