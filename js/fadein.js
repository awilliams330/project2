//remove the Fadeout class added on page load.
$('body').removeClass('fade-out');
//Class Based Transition

$('.fadeOut').click(function(e) {
  e.preventDefault();
  var link = $(this).attr('href');
		$('body').addClass('fade-out');
		setTimeout(function() {
			window.location = link
		},1000);
})

// All internal Link Transition

$('a').each(function(e) {

  if ( location.hostname === this.hostname || !this.hostname.length ) {
     var link = $(this).attr('href');
    if(link.match("^#")) {
      //insert scroll function

    } else if (link.match("^mailto") || link.match("^tel")) {
    // continue

    } else {
      if($(this).attr('target') == '_blank') {
        //continue
      } else {
        $(this).click(function(e){
         e.preventDefault();
          $('body').addClass('fadeOut');
          setTimeout(function() {
            window.location = link;
          },1000);
       });
      }
    }
  }
})
