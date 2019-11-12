jQuery(window).scroll(function() {
	if(jQuery(window).scrollTop() > 50) {
		jQuery('.header').addClass('fix');
	}
	else {
		jQuery('.header').removeClass('fix');
	}
});

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

jQuery("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = jQuery(jQuery(this).attr("href")).offset().top;

	jQuery("body, html").animate({
		scrollTop: position
	} /* speed */ );
});

// jQuery("a[href^='#']").click(function(e) {
// 	e.preventDefault();
	
// 	var position = $($(this).attr("href")).offset().top;

// 	jQuery("body, html").animate({
// 		scrollTop: position
// 	});
// });

// jQuery(document).on('click', 'a[href^="#"]', function (event) {
//     event.preventDefault();

//     jQuery('html, body').animate({
//         scrollTop: $($.attr(this, 'href')).offset().top
//     }, 500);
// });
