
<?php get_header(); ?>

<style>
    .slide {
  align-items: center;
  background-color: rgb(44, 33, 33);
  color: #999;
  display: flex;
  font-size: 1.5rem;
  justify-content: center;
  min-height: 10rem;
}

.slide img {
    width: 100%;
}

.bs-callout {
    padding: 20px;
    margin: 20px 0;
    border: 1px solid #eee;
    border-left-width: 5px;
    border-radius: 3px;
}
.bs-callout h4 {
    margin-top: 0;
    margin-bottom: 5px;
}
.bs-callout p:last-child {
    margin-bottom: 0;
}
.bs-callout code {
    border-radius: 3px;
}
.bs-callout+.bs-callout {
    margin-top: -5px;
}
.bs-callout-default {
    border-left-color: #777;
}
.bs-callout-default h4 {
    color: #777;
}
.bs-callout-primary {
    border-left-color: #428bca;
}
.bs-callout-primary h4 {
    color: #428bca;
}
.bs-callout-success {
    border-left-color: #5cb85c;
}
.bs-callout-success h4 {
    color: #5cb85c;
}
.bs-callout-danger {
    border-left-color: #d9534f;
}
.bs-callout-danger h4 {
    color: #d9534f;
}
.bs-callout-warning {
    border-left-color: #f0ad4e;
}
.bs-callout-warning h4 {
    color: #f0ad4e;
}
.bs-callout-info {
    border-left-color: #5bc0de;
}
.bs-callout-info h4 {
    color: #5bc0de;
}
</style>
<div id="slider_lazer" class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center py-3">Colônia de Férias</h1>
        </div>
        <div class="col-12">
            <img src="<?php bloginfo("template_url"); ?>/img/frase-colonia.png" class="d-block mx-auto w-75">
        </div>
        <div class="col-12 col-md-8 ">
            <div class="bs-callout bg-white bs-callout-danger border-left-color">
                <h4>FUNCIONAMENTO COLONIA</h4>
                Trabalhando com a capacidade reduzida de apartamentos.
<br>
Seguindo os Protocolos de Segurança Covid-19.
            </div>
            <p>A nossa colônia de férias fica em Bertioga, local confortável e aconchegante.<br>
                As informações sobre a colônia, vagas e valores podem ser feitas pelos telefones:<br> <b>(11)4795 9630 e 4975 9631,com Alice.</b>
                <br>
                O agendamento é feito apenas pessoalmente, o interessado deve levar documentos com foto de sócio e dependentes, sendo o pagamento realizado no momento da retirada da guia.
            </p>
            
        </div>
        <div class="col-12 col-md-8 bg-white p-2">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php bloginfo("template_url"); ?>/img/colonia/img1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php bloginfo("template_url"); ?>/img/colonia/img2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php bloginfo("template_url"); ?>/img/colonia/img3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php bloginfo("template_url"); ?>/img/colonia/img4.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php bloginfo("template_url"); ?>/img/colonia/img5.jpg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>