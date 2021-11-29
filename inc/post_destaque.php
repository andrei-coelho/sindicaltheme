<div class="container pt-2">
    <a href="<?php echo $capa['link']; ?>"><div class="capa-link row bg-white shadow">
        <div class="col-12 col-md-7 notice-style-capa" 
            style="background-image:url('<?php echo $capa['image']; ?>')">
        </div>
        <div class="col-12 col-md-5 px-3">
            <div class="row pt-4">
                <div class="col-6">
                    <span class="p-1 bg-primary text-light"><?php echo $capa['categ']; ?></span>
                </div>
                
            </div>
            <h1><?php echo $capa['title']; ?></h1>
            <h5 class="text-dark"><?php echo $capa['descr']; ?></h5>
        </div>
    </div></a>
</div>