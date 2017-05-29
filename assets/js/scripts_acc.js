$( document ).ready(function() {

  // Utilitaire "boostrap-like" pour une classe '.pull-down' (dispo dans boostrap v4 plus tard) [https://stackoverflow.com/a/17960100]
  !function ($) { //ensure $ always references jQuery
    $(function () { //when dom has finished loading
      //make top text appear aligned to bottom: http://stackoverflow.com/questions/13841387/how-do-i-bottom-align-grid-elements-in-bootstrap-fluid-layout
      function fixHeader() {
        //for each element that is classed as 'pull-down'
        //reset margin-top for all pull down items
        $('.pull-down').each(function () {
          $(this).css('margin-top', 0);
        });

        //set its margin-top to the difference between its own height and the height of its parent
        $('.pull-down').each(function () {
          if ($(window).innerWidth() >= 768) {
            $(this).css('margin-top', $(this).parent().height() - $(this).height());
          }
        });
      }

      $(window).resize(function () {
        fixHeader();
      });

      fixHeader();
    });
  }(window.jQuery);

  //application des classes boostrap a la carte après son chargement js
  $("#cmap svg").addClass("col-xs-12");
  $("#cmap svg").height("auto");
  
});
