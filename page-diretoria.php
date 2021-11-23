<?php $atualPage = "diretoria";  get_header(); ?>

<style>
    .diretor {
        width: 200px;
        height: 200px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 130%;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col p-4">
            <h1 class="text-center">Diretoria</h1>
        </div>
    </div>
</div>

<div class="container">
    <div id="content-diretores" class="row">
        
    </div>
</div>



<script>

    const diretores = [{"nome":"Márcio de Paula Cruz ","apelido":"(Bob)","cargo":"Presidente"},{"nome":"Miguel Aparecido do Espirito Santo","apelido":"","cargo":"Secretário de Organização"},{"nome":"Aderito Modesto","apelido":"","cargo":"Secretário de Formação"},{"nome":"Márcio Benha","apelido":"","cargo":"Secretário de Finanças"},{"nome":"Marcelo da Silva Cavalheiro Mendes","apelido":"","cargo":"Secretário de Assuntos Jurídicos"},{"nome":"Iduigues Ferreira Martins","apelido":"","cargo":"Representante junto ao Sinap"},{"nome":"Daniel de Araujo Matos","apelido":"","cargo":"Secretário de Imprensa, Comunicação e Divulgação"},{"nome":"Arenicio Cesar de Souza","apelido":"","cargo":"Secretário de Saúde, Meio Ambiente, Esporte, Cultura e Lazer"},{"nome":"Marivaldo Pereira Brito","apelido":"","cargo":"Secretário de Genero"},{"nome":"Marciel Santos Bispo","apelido":"","cargo":"Responsável Mobilização - Suplente 1"},{"nome":"Nilson Donizete de Oliveira","apelido":"","cargo":"Presidente da APAR - Suplente 2"},{"nome":"José Carlos Chaves","apelido":"","cargo":"Suplente 3"},{"nome":"Widson Pereira de Deus","apelido":"","cargo":"suplente 4"},{"nome":"Roberto Amancio","apelido":"","cargo":"Suplente 5"},{"nome":"Antonio Carlos de Souza","apelido":"","cargo":"Suplente 6"},{"nome":"Jesse Araujo Dias","apelido":"","cargo":"Suplente 7"},{"nome":"Edilma Moreira Rodrigues de Alencar","apelido":"","cargo":"Suplente 8"},{"nome":"Aguinaldo Ferreira dos Santos","apelido":"","cargo":"Suplente 9"},{"nome":"Antonio Vitor da Silva","apelido":"","cargo":"Suplente 10"},{"nome":"Robson Cabral de Almeida","apelido":"","cargo":"Suplente 11"},{"nome":"Jacinto Estevam E. Gonçalves","apelido":"","cargo":"Suplente 12"},{"nome":"Eduardo Gonçalves Ramos","apelido":"","cargo":"Conselho Fiscal 1"},{"nome":"Emerson Macedo Leão","apelido":"","cargo":"Conselho Fiscal 2"},{"nome":"Pedro Aparecido Ferreira","apelido":"","cargo":"Conselho Fiscal 3"},{"nome":"Marcio Antonio de Souza","apelido":"","cargo":"Suplente Conselho Fiscal 1"},{"nome":"Marcio Ribeiro","apelido":"","cargo":"Suplente Conselho Fiscal 2"},{"nome":"Thiago Soares da Silva","apelido":"","cargo":"Suplente Conselho Fiscal 3"}],

    contentDiretores = document.getElementById("content-diretores"),

    removeThings = string => string.toString()
	.replace(/[àáâãä]+/g, 'a')      
    .replace(/[ÀÁÂÄÅ]+/g, 'A')   
	.replace(/[èéêë]+/g, 'e')   
    .replace(/[ÈÉÊË]+/g, 'E')     	
	.replace(/[ìíîï]+/g, 'i')     
    .replace(/[ÌÍÎÏ]+/g, 'I')   	
	.replace(/[òóôõö]+/g, 'o')       
    .replace(/[ÒÓÔÕÖ]+/g, 'O')   	
	.replace(/[ùúûü]+/g, 'u')    
    .replace(/[ÙÚÛÜ]+/g, 'U')   	
	.replace(/[ýÿ]+/g, 'y')    
    .replace(/[ÝŸ]+/g, 'Y')    		       			
	.replace(/[çÇ]+/g, 'c')       			     			
	.replace(/\s+/g, '')           		
    .replace(/[^\w\-]+/g, '')       		
    .replace(/\-\-+/g, '')         		
    .replace(/^-+/, '')             		
    .replace(/-+$/, '')+".jpg"; 

    templateDiretor = (diretor, img) => `<div class="col-12 col-md-4 col-lg-3 text-center">
            <div class="diretor rounded-circle mx-auto" style="background-image:url('<?php bloginfo('template_url'); ?>/img/diretoria/${img}');">
            </div>
            <h3>${diretor.nome} ${diretor.apelido}</h3>
            <p>${diretor.cargo}</p>
        </div>`;

    var htmlDiretores = "";

    for (let index = 0; index < diretores.length; index++) {
        const diretor = diretores[index],
                  img = removeThings(diretor.nome);
        htmlDiretores += templateDiretor(diretor, img);
    }

    contentDiretores.innerHTML = htmlDiretores;

</script>

<?php get_footer(); ?>