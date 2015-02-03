(function ($) {
  console.log("What's going on?");
  $(document).ready(function(){

    var anchor = $('.section-content-single').find('a');
    var button_close = $('.button-close');
    var content_secundary = $('.section-content-secundary')
    // Remove the link
    anchor.removeAttr("href");

    // Append the content
    anchor.click(function(){
      button_close.css("display", "block");
      // content_secundary.append();
      button_close.click(function(){
        button_close.css("display", "none");
        content_secundary.empty();
      });
    });
  });


})(jQuery);
