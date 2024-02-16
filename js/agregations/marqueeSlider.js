(function($) {
    $.fn.marqueeSlider = function(options) {
      const defaults = {
        sensitivity: 0.1,
        repeatItems: true,
      };

      return this.each(function(index, element) {
        const container = $(element);
        const lists = container.find('.marquee-slider__list');
        const settings = $.extend({}, defaults, options[index]);

        if (settings.repeatItems) {
          lists.each(function() {
            const list = $(this);
            const items = list.find('.marquee-slider__list--item');

            // Calculate the total width of the items
            let totalItemsWidth = 0;
            items.each(function() {
              totalItemsWidth += $(this).outerWidth(true);
            });

            // Calculate the number of items to repeat based on the container width
            const containerWidth = container.width();
            const itemsToRepeat = Math.ceil(containerWidth / totalItemsWidth) + 1;

            // Clone and append items to meet the required count
            for (let i = 0; i < itemsToRepeat; i++) {
              items.clone().addClass('cloned').appendTo(list);
            }
          });
        }

        let scrollPosition = 0;
        let lastScrollTop = 0;

        function handleScroll() {
          const st = $(window).scrollTop();

          if (st > lastScrollTop) {
            // Scroll down
            scrollPosition += settings.sensitivity;
          } else {
            // Scroll up
            scrollPosition -= settings.sensitivity;
          }

          lists.each(function(index) {
            const translateValue = scrollPosition * (index % 2 === 0 ? -1 : 1);

            // Agrega la clase 'marquee-scroll' a todas las listas
            $(this).addClass('marquee-scroll');

            // Agrega la clase 'marquee-scroll-right' a listas pares y 'marquee-scroll-left' a impares
            $(this).toggleClass('marquee-scroll-right', index % 2 === 0);
            $(this).toggleClass('marquee-scroll-left', index % 2 !== 0);

            $(this).css('transform', `translate3d(${translateValue}%, 0, 0)`);
          });

          lastScrollTop = st;
        }

        $(window).on('scroll', function() {
          const containerTop = container.offset().top;
          const containerBottom = containerTop + container.outerHeight();
          const windowTop = $(window).scrollTop();
          const windowBottom = windowTop + $(window).height();

          if (windowBottom > containerTop && windowTop < containerBottom) {
            // The container is in the viewport
            handleScroll();
          }
        });
      });
    };
  })(jQuery);
