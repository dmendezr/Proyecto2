(function () { 
  var menuDropdown = $('.nav'),
      delay = 300; // dropdown delay (ms)

  // hide all dropdown elements
  $('a + ul', menuDropdown).hide();

  $("li", menuDropdown).hover(function() {
    var elem = $(this);

	// flag to indicate that the mouse has not left the area
	elem.attr('mIn', 'true');

	setTimeout(function () {
	  // if the mouse is still in show the drop down
	  if (elem.attr('mIn') == 'true') {
		$('a + ul', elem).show();
	  }
    }, delay);
    
  }, function() { // on hover out

    // set the flag as the mouse has left
    $(this).attr('mIn', 'false');
    // hide the drop down
    $('a + ul', $(this)).hide();
  });
}());