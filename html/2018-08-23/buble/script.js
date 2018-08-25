$(document).ready(function() {
  // $('#js-on').click(function() {
  // $('#myImage').attr('src', 'https://www.w3schools.com/js/pic_bulbon.gif');
  // });
  // $('#js-off').click(function() {
  //   $('#myImage').attr('src', 'https://www.w3schools.com/js/pic_bulboff.gif');
  // });
  $('#js-toggle').click(function() {
    // $('#myImage').attr({
    //   src: 'abc',
    //   alt: 'whoops'
    // });
    $('#myImage').attr('src', function(abc, value) {
      // console.log(index, value);
      if (value.includes('on')) {
        return 'https://www.w3schools.com/js/pic_bulboff.gif';
      } else {
        return 'https://www.w3schools.com/js/pic_bulbon.gif';
      }
    });
  });
});
