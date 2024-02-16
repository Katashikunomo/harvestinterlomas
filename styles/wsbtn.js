
function toggleWhatsAppPopup() {
    var whatsappPopup = document.getElementById('whatsappPopup');
    whatsappPopup.classList.toggle('open');
  }
  
  function sendWhatsAppMessage() {
    var message = document.getElementById('whatsappMessage').value;
    var phoneNumber = '5512345678'; // Reemplaza con tu nÃºmero de telÃ©fono de WhatsApp
  
    var url = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodeURIComponent(message);
  
    // Ventana emergente sin redirecciÃ³n
    var popup = window.open(url, '_blank', 'width=400,height=600,scrollbars=yes,resizable=yes');
    popup.focus();
  }
  
  function clearWhatsAppMessage() {
    document.getElementById('whatsappMessage').value = '';
  }


  const seccionesOcultas = document.querySelectorAll('.hidden');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) =>{
      entry.target.classList.toggle('mostrar', entry.isIntersecting)
    })
  })

  seccionesOcultas.forEach((seccion)=>observer.observe(seccion));