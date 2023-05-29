$(document).ready(function() {
    $(".my-button").hover(function() {
      $(this).css("background-color", "transparent");
      $(this).css("border", "none");
      $(this).css("opacity", "0");
    }, function() {
      $(this).css("background-color", "");
      $(this).css("border", "");
      $(this).css("opacity", "1");
    });
  });
