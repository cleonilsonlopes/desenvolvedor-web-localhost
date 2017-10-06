<?php include_once("header.php");?>
        
<section>

<div class="container" id="destaque-produtos-container">
    
        <!-- <div id="destaque-produtos" class="owl-carousel owl-theme"> -->
        <div class="destaque-produtos owl-carousel owl-theme"> <!-- dica do João, aula 66 -->
                <!-- <div class="container"> -->
                    <div class="item"> <!-- no código do prof. esta class é item. Tive que trocar para centralizar -->
                        <div class="col-sm-6 col-imagem"> 
                            <img src="img/produtos/moto-x.png" alt="Nome do Produto">
                        </div>
                        
                        <div class="col-sm-6 col-descricao"> 
                            <h2> Smartphone Motorola Moto-x Play Dual Chip Desbloqueado Android 5.1 </h2>
                        
                            <div class="box-valor">
                    
                                <div class="text-noboleto text-arial-cinza">no boleto</div>
                                <div class="text-por text-arial-cinza">por</div>
                                <div class="text-reais text-roxo">R$</div>
                                <div class="text-valor text-roxo">1.259</div>
                                <div class="text-valor-centavos text-roxo">,10</div>
                                <div class="text-parcelas text-arial-cinza">ou em até 8x de R$ 174,88 sem juros</div>
                                <div class="text-total text-arial-cinza">total a prazo R$ 1.399,00</div>

                                <a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>
                            </div>
                        </div>
                        
                    </div>
    
        </div>

    <!-- <button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
    <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button> -->

</div>

    <div id="promocoes" class="container">

        <div class="row">
            <div class="col-sm-2 box-1">

                <div class="box-promocao">
                <p> escolha por desconto</p>
                </div>
            </div>

            <div class="col-sm-10">

                <div class="row-fluid">
                    <div class="col-sm-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">40</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">60</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">80</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="box-promocao">
                            <div class="text-ate">até</div>
                            <div class="text-numero">85</div>
                            <div class="text-porcento">%</div>
                            <div class="text-off">off</div>
                        </div>
                    </div>
                </div>
                    
            </div>

        </div>


     </div>
</div>

    <div id="mais-buscados" class="container"></div>

    <div class="row text-center title-default-roxo">

                    <h2>os mais buscados</h2>
                    <hr>    
                </div>

                <div class="row">

                    <div class="col-sm-3"></div>

                    <div class="box-produto-info">
                        <a href="#">
                            <img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
                            <h3>Conjunto de Panelas Tramontina Versalhes Alumínio Antiaderente 5</h3>
                            <div class="estrelas"></div>
                            <div class="text-qtd-reviews">(300)</div>
                            <div class="text-valor text-roxo">R$ 109,90</div>
                            <div class="text-parcelado text-arial-cinza">10 x de R$ 10,99 sem juros</div>
                        </a>
                    </div>
                </div>

</section>
        
<?php include_once("footer.php");?>


<!-- Código do João Aula 66 -->

<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $(".destaque-produtos").owlCarousel({
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      loop: true,
      margin: 10,
      nav: true
    });
  });
</script>

<!-- <script>
$(function(){

    $("#destaque-produtos").owlCarousel({

    autoPlay: 5000,
    items : 1,
    singleItem: true

});

var owlDestaque = $("#destaque-produtos").data('olwCarousel');

    $('#btn-destaque-next').on("click", function(){

        owlDestaque.prev();
        
    })

    $('#btn-destaque-prev').on("click", function(){

        owlDestaque.next();
        
    });

});

</script> -->