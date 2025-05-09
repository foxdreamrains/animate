// INI KHUSUS HALAMAN ADMIN PRODUK view->admin->dashboard.blade.php
$(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
        }

    }

    $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
          } else if (window.event) {
              window.event.cancelBubble = true;
          }
      }
  });

    $('.fixed-plugin .active-color span').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-color', new_color);
    }

    if ($full_page.length != 0) {
        $full_page.attr('filter-color', new_color);
    }

    if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.attr('data-color', new_color);
    }
});

    $('.fixed-plugin .background-color .badge').click(function() {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('background-color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-background-color', new_color);
    }
});

    $('.fixed-plugin .img-holder').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).parent('li').siblings().removeClass('active');
      $(this).parent('li').addClass('active');


      var new_image = $(this).find("img").attr('src');

      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        $sidebar_img_container.fadeOut('fast', function() {
          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $sidebar_img_container.fadeIn('fast');
      });
    }

    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $full_page_background.fadeOut('fast', function() {
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          $full_page_background.fadeIn('fast');
      });
    }

    if ($('.switch-sidebar-image input:checked').length == 0) {
        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
    }

    if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
    }
});

    $('.switch-sidebar-image input').change(function() {
      $full_page_background = $('.full-page-background');

      $input = $(this);

      if ($input.is(':checked')) {
        if ($sidebar_img_container.length != 0) {
          $sidebar_img_container.fadeIn('fast');
          $sidebar.attr('data-image', '#');
      }

      if ($full_page_background.length != 0) {
          $full_page_background.fadeIn('fast');
          $full_page.attr('data-image', '#');
      }

      background_image = true;
  } else {
    if ($sidebar_img_container.length != 0) {
      $sidebar.removeAttr('data-image');
      $sidebar_img_container.fadeOut('fast');
  }

  if ($full_page_background.length != 0) {
      $full_page.removeAttr('data-image', '#');
      $full_page_background.fadeOut('fast');
  }

  background_image = false;
}
});

    $('.switch-sidebar-mini input').change(function() {
      $body = $('body');

      $input = $(this);

      if (md.misc.sidebar_mini_active == true) {
        $('body').removeClass('sidebar-mini');
        md.misc.sidebar_mini_active = false;

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

    } else {

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

        setTimeout(function() {
          $('body').addClass('sidebar-mini');

          md.misc.sidebar_mini_active = true;
      }, 300);
    }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
        }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
        }, 1000);

      });
});
});

$(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

  });

// INI KHUSUS DROPDOWN DITAMAH PRODUK_TAMBAH view->admin->produk->produktambbah.blade.php

var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "pilihan-kategori":*/
x = document.getElementsByClassName("pilihan-kategori");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
