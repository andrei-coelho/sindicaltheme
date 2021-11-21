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

    <nav class="top-menu d-none d-md-block bg-dark w-100">

        <div class="container-fluid">
            <div class="row py-1">
                <div class="col-6">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link nav-link-light active sm" aria-current="page" href="#">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-light sm" href="<?php echo site_url(); ?>/quem-somos/">quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-light sm" href="<?php echo site_url(); ?>/diretoria/">diretoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-light sm" href="<?php echo site_url(); ?>/contato/">contato</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6">
                    <button class="float-end btn btn-sm btn-outline-light mt-1">entrar</button>
                    <span class="float-end text-light me-3 mt-1">+55 55 5555-5555</span>
                </div>
            </div>
        </div>

    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0">

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
                        <a class="nav-link nav-link-light" href="<?php echo site_url(); ?>/category/noticias">noticias</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link nav-link-light" href="<?php echo site_url(); ?>/category/eventos">eventos</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link nav-link-light" href="<?php echo site_url(); ?>/category/blog-do-presidente">blog do presidente</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link nav-link-light" href="<?php echo site_url(); ?>/category/cct">CCT</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-light" href="#">campanha salarial</a>
                    </li>
                    
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
                </ul>
                

            </div>

            <div class="second-part bg-secondary d-none d-lg-block px-3">
                
            <div class="row">
                <div class="col-4">
                    <button id="ic-searc" class="btn btn-clean mt-3 pt-2 w-100">
                        <img style="width: 25px;" src="<?php bloginfo('template_url'); ?>/img/ic-search.png" alt="">
                    </button>
                </div>
                <div class="col-8">
                    <a href="#" class="btn btn-primary mt-4 w-100 shadow">SEJA SÓCIO</a>
                </div>
            </div>
                
                
                
            

            </div>

        </div>

    </nav>

    <div id="form-search" class="w-100 d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="m-0 p-0 mt-2 px-3 ">
                        
                        <div class="input-group shadow">
                            <input class="form-control" type="search" placeholder="Palavra-chave" aria-label="Search">
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

</header>

<!-- <div id="fixed-header"></div> -->

<script type="text/javascript">
    
    const formSearch = document.getElementById('form-search');

    document.getElementById('ic-searc').addEventListener('click', function(e){
        formSearch.classList.toggle('d-none');
    })

    document.getElementById('ic-searc-2').addEventListener('click', function(e){
        formSearch.classList.toggle('d-none');
    })
    
    document.getElementById('btn-close-search-form').addEventListener('click', function(e){
        formSearch.classList.toggle('d-none');
    })

</script>