<?php 

get_header();

$varsAPI = [
    "category_name" => "blog-do-presidente",
    "posts_per_page" => 6,
    'order' => 'DESC'
];

?> 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <?php include "templates/header-blog.php"; ?>
        </div>
    </div>
</div>

<?php 
$template_item = '<div class="container">
    <div class="row">
        <div class="col-12 border-bottom py-2">
            <a href="${varObj.link}">
            <div>
                <h1 class="text-center">${varObj.title}</h1>
            </div></a>
        </div>
    </div>
</div>';

$query = new WP_Query($varsAPI);

$noShowHeader = true;

include "inc/post_list.php";

get_footer();