$(document).ready(function() {
  var lines = $(".hidden");
  var i = -1;

  function showNext() {
    ++i;
    lines.eq(i % lines.length)
      .fadeIn(200)
      .delay(2000)
      .fadeOut(200, showNext);
  }

  showNext();
});