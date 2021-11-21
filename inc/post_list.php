<?php
    $dynamicID = sha1(mt_rand(1, 100000).microtime(true));
?>
<div class="container" style="min-height: 500px;">

    <div id="<?php echo "content-list-".$dynamicID; ?>" class="row my-2">
        <?php 

        $firstList = true;

        while($query -> have_posts()):

            $query->the_post();
            $cats = get_the_category();
            $catI = count($cats)-1;
            $categorySlug = $cats[$catI]->name;

            if(!isset($categoryParent)){
                $categoryParent = $categorySlug;
            }

            if(!isset($niceNameCateg)){
                $niceNameCateg = $cats[$catI]->category_nicename;
            }

            if($firstList){
                echo "<div class=\"col-12 py-4\"><h1>$niceNameCateg</h1></div>";
                $firstList = false;
            }
            
            $file = "item-".strtolower($categoryParent).".php";
            include $file;

        endwhile;
        ?>
    </div>

    <div class="row">
        <div class="col-12">
            <button id="btn-mais-<?php echo $dynamicID; ?>" class="btn btn-primary">
                <?php echo "mais $niceNameCateg..."; ?>
            </button>
            <button id="btn-spn-<?php echo $dynamicID; ?>" class="btn btn-primary" style="display:none;" type="button" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                aguarde...
            </button>
        </div>
    </div>

</div>

<script>
    
    const btn<?php echo $dynamicID; ?>     = document.getElementById("btn-mais-<?php echo $dynamicID; ?>"),
          spn<?php echo $dynamicID; ?>     = document.getElementById("btn-spn-<?php echo $dynamicID; ?>"),
          content<?php echo $dynamicID; ?> = document.getElementById("content-list-<?php echo $dynamicID; ?>"),

    __hide_all<?php echo $dynamicID; ?> = _ => {
        btn<?php echo $dynamicID; ?>.style.display = "none";
        spn<?php echo $dynamicID; ?>.style.display = "none";
    },

    __hide_btn<?php echo $dynamicID; ?> = _ => {
        btn<?php echo $dynamicID; ?>.style.display = "none";
        spn<?php echo $dynamicID; ?>.style.display = "block";
    },

    __show_btn<?php echo $dynamicID; ?> = _ => {
        btn<?php echo $dynamicID; ?>.style.display = "block";
        spn<?php echo $dynamicID; ?>.style.display = "none";
    };

    var paged<?php echo $dynamicID; ?> = <?php echo (isset($varsAPI['paged']) ? $varsAPI['paged'] : 1); ?>;

    const __template_item_<?php echo $dynamicID; ?> = varObj => `<?php echo $template_item; ?>`;

    btn<?php echo $dynamicID; ?>.addEventListener("click", e => {

        __hide_btn<?php echo $dynamicID; ?>();
        paged<?php echo $dynamicID; ?>++;
        
        get_values_by("<?php 
            echo (function($varsAPI){
                $route = "?";
                foreach ($varsAPI as $key => $value) {
                    if($key != "paged") $route .= $key."=".$value."&";
                }
                return $route;
            })($varsAPI);
        ?>paged="+paged<?php echo $dynamicID; ?>, json => {
            var elementsToAdd = "";
            json.forEach(item => {
                elementsToAdd += __template_item_<?php echo $dynamicID; ?>(item)
            });
            content<?php echo $dynamicID; ?>.innerHTML += elementsToAdd;
            json.length > 0 ?
            __show_btn<?php echo $dynamicID; ?>():
            __hide_all<?php echo $dynamicID; ?>();
        });

    });

</script>