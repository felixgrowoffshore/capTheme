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


})
