var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
});

function sendEmail(){
	formname =  document.getElementById("formname");
	formemail =  document.getElementById("formemail");
	formphone =  document.getElementById("formphone");
	formmessage =  document.getElementById("formmessage");
	
	if( formname.value != "" && formemail.value != "" && formphone.value != "" && formmessage.value != "") {
		//document.location.href="ciaociao";
		
		stringUrl = "mailto:gabri-pette@hotmail.it?subject=gabrielepetteno.github.io - " + formemail.value + "&body=Hi i'm " + formname.value + "%0D%0AThis is my email : " + formemail.value + "%0D%0A This is my phone number : " + formphone.value + "%0D%0A" + formmessage.value;

		document.location.href=stringUrl;
	}
};

(function($) {

	// Collapse Navbar
	var navbarCollapse = function() {
	if ($("#mainNav").offset().top > 100) {
	  $("#mainNav").addClass("navbar-shrink");
	} else {
	  $("#mainNav").removeClass("navbar-shrink");
	}
	};

	// Collapse now if page is not at top
	navbarCollapse();
	// Collapse the navbar when page is scrolled
	$(window).scroll(navbarCollapse);

  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
	  
	  var target = $(hash).offset().top - 54;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: target
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

})(jQuery); // End of use strict

