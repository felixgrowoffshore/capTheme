jQuery(document).ready(function($){
  $('select').niceSelect();


  $('#more_search_filter').on('show.bs.collapse', function() {
    $(".advance-search .filter-caret").addClass('open');
    $(".advance-search .filter-txt").text('Fewer');
    // Fewer search filters
  });
  $('#more_search_filter').on('hide.bs.collapse', function() {
    $(".advance-search .filter-caret").removeClass('open');
    $(".advance-search .filter-txt").text('More');
  });

  $('.org-slick-slide').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });


})
