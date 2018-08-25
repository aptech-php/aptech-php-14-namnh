$(document).ready(function() {
  $('#js-button').click(function() {
    $('#js-heading').attr('style', function(index, value) {
      console.log(index, value);
    });
  });
});
