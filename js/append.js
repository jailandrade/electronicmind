(function ($) {
  console.log("What's going on?");
  $(document).ready(function(){

    var anchor = $('.section-content-single').find('a');
    var button_close = $('.button-close');
    var content_secundary = $('.section-content-secundary')

    // Obtain the link and remove it
    // anchor.click(function(event){
    //   event.preventDefault();
    //   resource = anchor.attr("href");
    //   console.log('Here is the route you clicked' + resource);
    //
    //   jQuery.ajax({
    //     type:"GET",
    //     dataType: 'json',
    //     url: "" + resource,
    //     success: function(results){
    //       console.log(results);
    //     },
    //
    //     error: function(results){
    //       console.log(results);
    //     }
    //   });
    // });

    jQuery.ajaxSetup({cache:false});
    anchor.click(function(event){
      event.preventDefault();
      var page_link = $(this).attr("href");

      content_secundary.html("Abriendo");
      content_secundary.load(page_link);
    });

  });


})(jQuery);
