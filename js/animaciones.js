$(document).ready(function(){
    $("#cuadrado").hide(); // También puedes usar $("#cuadrado").css("display", "none");
    $("#cuadrado2").hide(); 
    $("#cuadrado3").hide(); 
    $("#cuadrado4").hide(); 
    $("#imagen").hide(); 
    $("#imagen").hide(); 
    
    // Animacion para recuadro de informacion de cursos
    $("#btn1").click(function(){
        $("#cuadrado").animate({
            height: 'toggle'
        });
    });
    $("#btn2").click(function(){
        $("#cuadrado2").animate({
            height: 'toggle'
        });
    });
    $("#btn3").click(function(){
        $("#cuadrado3").animate({
            height: 'toggle'
        });
    });
    $("#btn4").click(function(){
        $("#cuadrado4").animate({
            height: 'toggle'
        });
    });
    // Animacion para recuadro de informacion de cursos
    // $("#btn2").click(function(){
    //     $("#cuadrado2").animate({
    //         height: 'toggle'
    //     });
    // });
    // Animaciones para 3 boton de imagen
    // $("#btn3").click(function(){
    //         $("#imagen").animate({
    //             height: 'toggle'
    //         });
    // });
    // Animacion para las redes sociales del podcast
    $("#fl1").click(function(){
            $("#pl1").slideToggle("slow");
        });
});