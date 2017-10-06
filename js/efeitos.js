$(document).ready(function(){
    
                $("#logotipo").on("mouseover", function(){
                    //$("#banner h1").css("color","red"); altera uma propriedade do css. Alternativa 
                    //$("#banner h1").css({"color":"red", "font-size": "12em", "transition": "1s"}); altera várias propriedades do css. Alternativa
                    $("#banner h1").addClass("efeito"); //adiciona uma classe efeito e lá no css tem as configurações dessa classe
                }).on("mouseout", function(){
                    $("#banner h1").removeClass("efeito");
                });
    
                $("#input-search").on("focus", function(){
                    $("li.search").addClass("ativo");
    
                }).on("blur", function(){
                    $("li.search").removeClass("ativo");
                });
    
                $(".thumbnails").owlCarousel({
                    loop:true,
                    margin: 25,
                    nav:true,
                    navText: ["Anterior", "Próximo"],
                    responsive: {
                        0 :{
                            items: 1
                        },
                        480:{
                            items: 3
                        },
                        768: {
                            items: 4
                        },
                        1200: {
                            items: 6
                        }
                    }
                });
    
            });