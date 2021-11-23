<?php global $atualPage; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php bloginfo('template_url'); ?>/js/async_connect_api.js"></script>
    <script>
        config_api_connection("<?php echo site_url(); ?>")
    </script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body class="bg-light">
 

<header>

    <nav id="top-menu" class="top-menu d-none d-md-block bg-white w-100">

        <div class="container-fluid">
            <div class="row py-1">
                <div class="col-6">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link <?php echo($atualPage == "home" ? "text-primary" : "text-dark"); ?> sm" href="<?php echo site_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($atualPage == "sindicato" ? "text-primary" : "text-dark"); ?> sm" href="<?php echo site_url(); ?>/o-sindicato/">O Sindicato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($atualPage == "diretoria" ? "text-primary" : "text-dark"); ?> sm" href="<?php echo site_url(); ?>/diretoria/">Diretoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo($atualPage == "contato" ? "text-primary" : "text-dark"); ?> sm" href="<?php echo site_url(); ?>/contato/">Contato</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 d-flex flex-row-reverse">

                    <a href="https://www.cut.org.br/" target="_blank">
                        <img src="<?php bloginfo("template_url"); ?>/img/ic-cut.jpg" style="height: 40px;">
                    </a>

                    <a href="https://www.industriall-union.org/" target="_blank">
                        <img src="<?php bloginfo("template_url"); ?>/img/ic-industriall.jpg" style="height: 40px;">
                    </a>

                    <a href="#" target="_blank">
                        <img src="<?php bloginfo("template_url"); ?>/img/ic-sinap.jpg" style="height: 40px;">
                    </a>

                    <a href="https://www.facebook.com/Papeleiros/" target="_blank">
                        <img src="<?php bloginfo("template_url"); ?>/img/ic-federacao.jpg" style="height: 40px;">
                    </a>

                    <!-- login
                    <button class="float-end btn btn-sm btn-outline-dark mt-1">entrar</button>
                    -->
                </div>
                
            </div>
        </div>

    </nav>

    <nav id="navbar-principal" class="navbar navbar-expand-lg navbar-dark bg-primary p-0 m-0">

        <div class="container-fluid p-lg-0">

            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                <img class="my-1 mx-3" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo">
            </a>
            
            <button id="ic-searc-2" class="btn btn-clean d-lg-none">
                <img style="width: 25px;" src="<?php bloginfo('template_url'); ?>/img/ic-search.png" alt="">
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">

                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll mx-auto" style="--bs-scroll-height: 400px;">
                    
                    <li class="nav-item">
                        <a class="nav-link nav-link-light d-md-none" href="<?php echo site_url(); ?>">Home</a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link nav-link-light <?php echo($atualPage == "noticias" ? "active" : ""); ?>" href="<?php echo site_url(); ?>/noticias">Notícias</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link nav-link-light <?php echo($atualPage == "eventos" ? "active" : ""); ?>" href="<?php echo site_url(); ?>/eventos">Eventos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link nav-link-light <?php echo($atualPage == "blog-do-presidente" ? "active" : ""); ?>" href="<?php echo site_url(); ?>/blog-do-presidente">Blog do Presidente</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link nav-link-light <?php echo($atualPage == "cct" ? "active" : ""); ?>" href="<?php echo site_url(); ?>/cct">Convenção Coletiva</a>
                    </li>

                    <!--Em desenvolvimento
                    <li class="nav-item">
                        <a class="nav-link nav-link-light" href="#">campanha salarial</a>
                    </li>
                    -->

                    <!--Serviços
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-light dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            serviços
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    -->

                    <li class="nav-item">
                        <a class="nav-link nav-link-light d-md-none" href="<?php echo site_url(); ?>/o-sindicato/">O Sindicato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-light d-md-none" href="<?php echo site_url(); ?>/diretoria/">Diretoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-light d-md-none" href="<?php echo site_url(); ?>/contato/">Contato</a>
                    </li>

                </ul>
                

            </div>

            <div class="second-part bg-secondary d-none d-lg-block px-3">
                
                <div class="row">
                    <div class="col-12">
                        <button id="ic-searc" class="btn btn-clean mt-3 pt-2 w-100">
                            <img style="width: 25px;" src="<?php bloginfo('template_url'); ?>/img/ic-search.png" alt="">
                        </button>
                    </div>
                    <!--
                    <div class="col-8">
                        <a href="#" class="btn btn-primary mt-4 w-100 shadow">SEJA SÓCIO</a>
                    </div>
                    -->
                </div>

            </div>

        </div>

    </nav>

    <div id="form-search" class="w-100 d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="m-0 p-0 mt-2 px-3 " method="get" action="<?php bloginfo('url') ?>">
                        
                        <div class="input-group shadow">
                            <input class="form-control" name="s" type="search" placeholder="Palavra-chave" aria-label="Search">
                            <button class="btn btn-primary">buscar</button>
                        </div>
                        <button id="btn-close-search-form" type="button" class="btn btn-close "
                            style="position:relative; top: -30px; left: -30px; "
                        aria-label="Close">
                            
                        </button>               
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white d-flex justify-content-center d-md-none">

        <a href="https://www.cut.org.br/" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/img/ic-cut.jpg" style="height: 40px;">
        </a>

        <a href="https://www.industriall-union.org/" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/img/ic-industriall.jpg" style="height: 40px;">
        </a>

        <a href="#" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/img/ic-sinap.jpg" style="height: 40px;">
        </a>

        <a href="https://www.facebook.com/Papeleiros/" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/img/ic-federacao.jpg" style="height: 40px;">
        </a>
    </div>

</header>



<!-- <div id="fixed-header"></div> -->

<script type="text/javascript">
    
    const formSearch = document.getElementById('form-search'),
          navbarPrincipal = document.getElementById('navbar-principal'),
          topMenu = document.getElementById('top-menu');

    document.getElementById('ic-searc').addEventListener('click', function(e){
        formSearch.classList.toggle('d-none');
    })

    document.getElementById('ic-searc-2').addEventListener('click', function(e){
        formSearch.classList.toggle('d-none');
    })
    
    document.getElementById('btn-close-search-form').addEventListener('click', function(e){
        formSearch.classList.toggle('d-none');
    })

    document.addEventListener('scroll', function(event){
        var scrooll = event.target.scrollingElement.scrollTop;
        if(scrooll > 300){
            // mostra o header
            formSearch.classList.add("position-fixed", "w-100", "mt-5", "pt-4");
            navbarPrincipal.classList.add("position-fixed", "w-100");
            topMenu.classList.remove("d-md-block");
        } else {
            // esconde o header
            formSearch.classList.remove("position-fixed", "w-100", "mt-5", "pt-4");
            navbarPrincipal.classList.remove("position-fixed", "w-100");
            topMenu.classList.add("d-md-block");
        }
    });


</script>