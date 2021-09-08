<?php 

$types = ['noticias', 'eventos', 'campanha-salarial', 'blog'];
$ctgry = get_the_category();
$lastc = $ctgry[count($ctgry)-1];

$extType = $lastc -> slug;

if($lastc->parent > 0){
    $category_parent = get_term( $lastc->parent, 'category' );
    $extType = $category_parent -> slug;
}

if(!in_array($extType, $types)){
    // error
}

get_header();

get_template_part('templates/post', $extType);

get_footer();