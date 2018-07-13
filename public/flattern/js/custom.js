/*global jQuery:false */
jQuery(document).ready(function($) {
  "use strict";


  (function() {

    var $menu = $('.navigation nav'),
      optionsList = '<option value="" selected>Go to..</option>';

    $menu.find('li').each(function() {
        var $this = $(this),
          $anchor = $this.children('a'),
          depth = $this.parents('ul').length - 1,
          indent = '';

        if (depth) {
          while (depth > 0) {
            indent += ' - ';
            depth--;
          }

        }
        $(".nav li").parent().addClass("bold");

        optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
      }).end()
      .after('<select class="selectmenu">' + optionsList + '</select>');

    $('select.selectmenu').on('change', function() {
      window.location = $(this).val();
    });

  })();


  $('.toggle-link').each(function() {
    $(this).click(function() {
      var state = 'open'; //assume target is closed & needs opening
      var target = $(this).attr('data-target');
      var targetState = $(this).attr('data-target-state');

      //allows trigger link to say target is open & should be closed
      if (typeof targetState !== 'undefined' && targetState !== false) {
        state = targetState;
      }

      if (state == 'undefined') {
        state = 'open';
      }

      $(target).toggleClass('toggle-link-' + state);
      $(this).toggleClass(state);
    });
  });

  //add some elements with animate effect

  $(".big-cta").hover(
    function() {
      $('.cta a').addClass("animated shake");
    },
    function() {
      $('.cta a').removeClass("animated shake");
    }
  );
  $(".box").hover(
    function() {
      $(this).find('.icon').addClass("animated pulse");
      $(this).find('.text').addClass("animated fadeInUp");
      $(this).find('.image').addClass("animated fadeInDown");
    },
    function() {
      $(this).find('.icon').removeClass("animated pulse");
      $(this).find('.text').removeClass("animated fadeInUp");
      $(this).find('.image').removeClass("animated fadeInDown");
    }
  );


  $('.accordion').on('show', function(e) {

    $(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('active');
    $(e.target).prev('.accordion-heading').find('.accordion-toggle i').removeClass('icon-plus');
    $(e.target).prev('.accordion-heading').find('.accordion-toggle i').addClass('icon-minus');
  });

  $('.accordion').on('hide', function(e) {
    $(this).find('.accordion-toggle').not($(e.target)).removeClass('active');
    $(this).find('.accordion-toggle i').not($(e.target)).removeClass('icon-minus');
    $(this).find('.accordion-toggle i').not($(e.target)).addClass('icon-plus');
  });



  //Navi hover
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
  });

  // tooltip
  $('.social-network li a, .options_box .color a').tooltip();

  // fancybox
  $(".fancybox").fancybox({
    padding: 0,
    // autoResize: true,
    autoResize: false,
    beforeShow: function() {
      this.title = $(this.element).attr('title');
      this.title = '<h4>' + this.title + '</h4>' + '<p>' + $(this.element).parent().find('img').attr('alt') + '</p>';
      
    },
    helpers: {
      title: {
        type: 'inside'
      },
    }

  });

var $window = $(window),
  mapObject, marker, yPos, coords, TimelineLite;
/*maps*/
var App = {
  
  start: function() {
    
    
    // call google map
    App.map();
    
  },
map: function() {
    
    var btn_zoom_in = document.getElementById('zoomin');
    if (btn_zoom_in !== null) {
      google.maps.event.addDomListener(btn_zoom_in, 'click', function() {
        mapObject.setZoom(mapObject.getZoom() + 1 );
      });
    }

    var btn_zoom_out = document.getElementById('zoomout');
    if (btn_zoom_out !== null) {
      google.maps.event.addDomListener(btn_zoom_out, 'click', function() {
        mapObject.setZoom(mapObject.getZoom() - 1 );
      });
    }
    
    var mapContainer = document.getElementById('map');
    
    if (mapContainer !== null) {
      App.create_map(mapContainer);
      App.create_marker();
      App.create_info();
    }
  },
  
  
  create_map: function(mapContainer) {

    var mapOptions = {
      center: new google.maps.LatLng(-7.2783231,112.7968071), //37.36456, -121.92852
      zoom: 17,
      navigationControl: false,
      mapTypeControl: false,
      scrollwheel: false,
      disableDefaultUI: true,
      disableDoubleClickZoom: true
    };
    
    mapObject = new google.maps.Map(mapContainer, mapOptions);

    var mapStyle = [
      {
        "stylers": [
          { "saturation": -100 },
          { "gamma": 1.40 },
          { "lightness": 25 }
        ]
      },{featureType: "poi",elementType: "labels",stylers: [{visibility:"off"}]}
    ];
    
    mapObject.setOptions({styles: mapStyle});
  },
  
  create_marker: function() {
    
    var pinImage = new google.maps.MarkerImage('img/marker.png'),
    myPin = new google.maps.LatLng(-7.2804676,112.7923379);
    
    marker = new google.maps.Marker({
      position: myPin,
      map: mapObject,
      title: 'Hello World!',
      icon: pinImage
    });
    
  },
  
  create_info: function() {
    
    var boxText = document.createElement("div");
    boxText.style.cssText = "color:#fff;";
    /*jshint multistr: true*/
    boxText.innerHTML = "\
      <div class='marker-label'>\
        Civil Engineering Building,<br>\
        1st floor.<br>\
        Keputih, Sukolilo, Surabaya<br>\
        Telp : +62 31-5997152<br>\
        Fax : +62 31-5947284<br>\
        Email : ce@its.ac.id<br>\
        </div>\
      ";

    var infoOptions = {
      content: boxText,
      disableAutoPan: true,
      maxWidth: 0,
      pixelOffset: new google.maps.Size(-25, -235),
      zIndex: null,
      boxStyle: { 
        background: "url('img/marker-label.png') no-repeat",
        width: "400px",
        height: "215px"
      },
      infoBoxClearance: new google.maps.Size(1, 1),
      isHidden: false,
      pane: "mapPane",
      enableEventPropagation: true
    };
    
    var ib = new InfoBox(infoOptions);
    ib.open(mapObject, marker);
    
  },
};




  //scroll to top
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.scrollup').fadeIn();
    } else {
      $('.scrollup').fadeOut();
    }
  });
  $('.scrollup').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
    return false;
  });

  $('#mycarousel').jcarousel();
  $('#mycarousel1').jcarousel();

  //flexslider
  $('.flexslider').flexslider();

  //nivo slider
  $('.nivo-slider').nivoSlider({
    effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
    slices: 15, // For slice animations
    boxCols: 8, // For box animations
    boxRows: 4, // For box animations
    animSpeed: 500, // Slide transition speed
    pauseTime: 5000, // How long each slide will show
    startSlide: 0, // Set starting Slide (0 index)
    directionNav: true, // Next & Prev navigation
    controlNav: false, // 1,2,3... navigation
    controlNavThumbs: false, // Use thumbnails for Control Nav
    pauseOnHover: true, // Stop animation while hovering
    manualAdvance: false, // Force manual transitions
    prevText: '', // Prev directionNav text
    nextText: '', // Next directionNav text
    randomStart: false, // Start on a random slide
    beforeChange: function() {}, // Triggers before a slide transition
    afterChange: function() {}, // Triggers after a slide transition
    slideshowEnd: function() {}, // Triggers after all slides have been shown
    lastSlide: function() {}, // Triggers when last slide is shown
    afterLoad: function() {} // Triggers when slider has loaded
  });

  // Da Sliders
  if ($('#da-slider').length) {
    $('#da-slider').cslider();
  }

  //slitslider
  var Page = (function() {

    var $nav = $('#nav-dots > span'),
      slitslider = $('#slider').slitslider({
        onBeforeChange: function(slide, pos) {
          $nav.removeClass('nav-dot-current');
          $nav.eq(pos).addClass('nav-dot-current');
        }
      }),

      init = function() {
        initEvents();
      },
      initEvents = function() {
        $nav.each(function(i) {
          $(this).on('click', function() {
            var $dot = $(this);

            if (!slitslider.isActive()) {
              $nav.removeClass('nav-dot-current');
              $dot.addClass('nav-dot-current');
            }

            slitslider.jump(i + 1);
            return false;

          });

        });

      };

    return {
      init: init
    };
  })();

  Page.init();

  

});
