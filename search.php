<?php

get_header();

if(!have_posts()){
    include "templates/not-results.php";
    get_footer();
    exit;
}

$api_search = $_GET['s'];

echo '<div class="container">
    <div class="row">
        <div class="col-12 my-3">
            <h3>Resultados da busca <b>"'.$api_search.'"</b></h3>
        </div>
    </div>
    </div>';

$categorias = [
    "noticias" => [
        "Notícias",
        '<div class="col-12 col-md-4 p-0 ">
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
        </div>'
    ], 
    "blog-do-presidente" => [
        "Blog do Presidente",
        '<div class="container">
            <div class="row">
                <div class="col-12 border-bottom py-2">
                    <a href="${varObj.link}">
                    <div>
                        <h1 class="text-center">${varObj.title}</h1>
                    </div></a>
                </div>
            </div>
        </div>'
    ], 
    "eventos" => [
        "Eventos",
        '<div class="container-fluid p-0 mt-2">
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
    </div>'
    ], 
    "cct" => [
        "Convenções Coletivas",
        '<div class="col-12 col-md-4">
            <div class="border rounded text-center py-3 m-1 bg-white">
                <img class="w-50 mx-auto d-block" src="'.get_bloginfo("template_url").'/img/ic-convencao-coletiva.png" alt="">
                <h5>${varObj.title}</h5>
                ${varObj.content}
            </div>
        </div>'
    ]
];

foreach ($categorias as $key => $value) {
    
    $varsAPI = [
        "s" => $api_search,
        "posts_per_page" => 3,
        "category_name" => $key,
        'order' => 'DESC'
    ];

    $categoryParent = $key;
    $niceNameCateg  = $value[0];
    $template_item  = $value[1];

    $query = new WP_Query($varsAPI);

    include "inc/post_list.php";

    wp_reset_query();

}

get_footer();


