/* global jQuery */
(function( $ ) {
  $(document).ready(function(){
    $('.name_directory_nr1').each(function(){
      var n = $(this).children().length;
      $(this).addClass('row');
      if(n > 2){
        $(this).children().each(function(i){
          $(this).addClass('col-sm');
        });
        
      }
    });
  });
});