$(document).ready(function(){

  $.ajax(
    {
      url: "http://localhost/mamp_public/php-ajax-dischi/dist/php/server.php",
      method: "GET",
      success: function(response) {
        var source = $("#track-template").html();
        var trackTemplate = Handlebars.compile(source);
        for (var trackNumber = 0; trackNumber < response.length; trackNumber++ ) {
          $('.main__tracks').append( trackTemplate(response[trackNumber]) );
        }
      },
      error: function(result, stats, errors) {
        alert("errore");
      },
    }
  );

});
