// Espera a que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener("DOMContentLoaded", function() {
    // Obtén el elemento con la clase '.marquee-slider'
    var marqueeSlider = document.querySelector('.marquee-slider');
  
    // Función para ejecutar el script del marquee-slider
    function runMarqueeSlider() {
      // Utiliza jQuery para ejecutar el plugin marqueeSlider con opciones específicas
      $('.marquee-slider').marqueeSlider([
        { sensitivity: 0.1, repeatItems: true },
        { sensitivity: 0.3, repeatItems: true }
      ]);
    }
  
    // Configura el objeto IntersectionObserver
    var observer = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        // Si el elemento es visible en el viewport
        if (entry.isIntersecting) {
          // Ejecuta el script del marquee-slider
          runMarqueeSlider();
          // Deja de observar el elemento para que no se repita
          observer.unobserve(entry.target);
        }
      });
    //   En este caso, el umbral 0 significa que tan pronto como cualquier parte del elemento de destino (marqueeSlider) sea visible en el viewport, 
    // se activará la función de devolución de llamada (callback). Cuando el threshold es 0, significa que cualquier cantidad de intersección activará el callback.
    }, { threshold: 0 });
  
    // Comienza a observar el elemento
    observer.observe(marqueeSlider);
  
    // También se puede ejecutar el script inicialmente si el elemento ya es visible en la carga inicial como despues de renderizarse
    if (isElementInViewport(marqueeSlider)) {
      runMarqueeSlider();
      observer.unobserve(marqueeSlider);
    }
  
    // Función para verificar si un elemento está en el viewport
    // Nota: La función isElementInViewport se utiliza para determinar si un elemento está completamente visible en el viewport del navegador. 
    // Toma como argumento el elemento el que se está evaluando y devuelve true si está completamente visible y false si no lo está.
    function isElementInViewport(el) {
        // Esta función devuelve un objeto con propiedades que describen las dimensiones y la posición de un elemento. En este caso, se almacena en la variable rect.
      var rect = el.getBoundingClientRect();
      return (
            //rect.top >= 0: Verifica si la parte superior del elemento está por encima del borde superior del viewport. Si es igual o mayor a cero, significa que la parte superior del elemento es visible en el viewport. 
        rect.top >= 0 &&
            // rect.left >= 0: Verifica si la parte izquierda del elemento está a la izquierda del borde izquierdo del viewport. Si es igual o mayor a cero, significa que la parte izquierda del elemento es visible en el viewport.
        rect.left >= 0 &&
        
// rect.bottom <= (window.innerHeight || document.documentElement.clientHeight): Verifica si la parte inferior del elemento está por debajo del borde inferior del viewport. window.innerHeight representa la altura del viewport y document.documentElement.clientHeight es otra forma de obtener la misma información
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }
  
    // Evento de scroll para verificar continuamente la visibilidad del elemento
    window.addEventListener('scroll', function() {
      if (isElementInViewport(marqueeSlider)) {
        runMarqueeSlider();
        observer.unobserve(marqueeSlider);
      }
    });
});

