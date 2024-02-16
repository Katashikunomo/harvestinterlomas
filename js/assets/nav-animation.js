$(window).scroll(function(event) {
    var scrollLeft = $(window).scrollLeft();
    var scrollTop = $(window).scrollTop();
   
    if(scrollTop > 40){
    // Estilos para el contenedor
      document.getElementById('test').style.background='#113897';
      document.getElementById('test').style.top="35px";
      document.getElementById('test').style.height="77px";
      // document.getElementById('test').style.display="flex";
      // document.getElementById('test').style.justifyItems="center";

      // document.getElementById('test').style.alignItems="left center";
      // document.getElementById('test').style.justifyContent="center";

      // document.getElementById('nav').style.height="50px";
      document.getElementById('nav').style.fontSize="1px";
      document.getElementById('test').style.boxShadow='10px 1px 80px #000 ';
      document.getElementById('test').style.borderRadius='10px ';
    }
  
   if(scrollTop <= 10){
    // Estilos para el contenedor
      document.getElementById('test').style.background='';
      document.getElementById('test').style.top="100px";
      document.getElementById('test').style.boxShadow='none';
      document.getElementById('test').style.transition="all ease 0.3s";

      
    }
  
  });