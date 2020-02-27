$(document).ready(function(){

  $ajax(
    {
      url: "http://localhost/dist/php/server.php",
      method: GET,
      // dataType: "jsonp",
      success: function(response) {
        console.log(response);
      },
      error: function(result, stats, errors) {
        alert("errore "+errors);
      },
    }
  );

});
