<div class="container-fluid py-4 bg-white">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-6 text-center">
            <img class="w-50" src="<?php bloginfo('template_url') ?>/img/ic-not-results.jpg">
            <p>Não foi encontrado nenhum resultado para a busca <b><?php echo $_GET['s']; ?></b></p>
            <a href="<?php bloginfo('url') ?>" class="btn btn-primary">Voltar para home</a>
        </div>
    </div>
</div>