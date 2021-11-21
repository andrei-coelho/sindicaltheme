<?php 

    $query2 = new WP_Query([
        "category_name" => "eventos",
        "posts_per_page" => 1,
        'order' => 'DESC'
    ]);

    if($query2->have_posts()){
        
        $query2->the_post();
        $meses = ["", "jan", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "set", "out", "nov", "dez"];

        $dataLimit = get_the_excerpt();

        $date1  = \DateTime::createFromFormat("d/m/Y", date("d/m/Y"));
        $date2  = \DateTime::createFromFormat("d/m/Y", $dataLimit);

        if($date1 < $date2){

            $dataArr = explode("/", $dataLimit);

            $mes = $meses[(int)$dataArr[1]];    

            include "eventos_last.php";
           
        } else {
 
            include "download_cct_area_home.php";

        }


    } 

    wp_reset_query();

?>

