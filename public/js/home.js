     const sidenav = document.querySelectorAll('.sidenav');
     M.Sidenav.init(sidenav);

     const dropdown = document.querySelectorAll('.dropdown-button .dropdown-content .dropdown-trigger');
     M.Dropdown.init(dropdown);

     const carousel = document.querySelectorAll('.carousel');
     M.Carousel.init(carousel);

     document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems,'left');
    });
     document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.fixed-action-btn');
        var instances = M.FloatingActionButton.init(elems, {
          hoverEnabled: false
      });
    });

     document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel .carousel-slider .center');
        var instances = M.CarouselActionItem.init(elems, 'right');
    });
     document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel-slider');
        var instances = M.CarouselActionItem.init(elems, {
            fullWidth: true,
            indicators: true
        });
    });

     const slider = document.querySelectorAll('.slider');
     M.Slider.init(slider);