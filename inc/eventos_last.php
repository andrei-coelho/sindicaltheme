<div class="container-fluid p-0 mt-2">
    <div class="row text-white ">
        <div class="col-3 bg-primary py-4">
            <h1 class="text-center"><?php echo $dataArr[0]; ?> <br><?php echo strtoupper($mes); ?></h1>
        </div>
        <div class="col-9 bg-secondary">
            <a class="link-tertiary" href="<?php the_permalink(); ?>">
                <h5 class="text-tertiary mt-2">Evento</h5>
                <h3><?php the_title(); ?></h3>
            </a>
        </div>
    </div>
</div>
