$(document).on('click', '.menu-bar', function () {
	$('.sidenav').addClass("active");
	$('.overlay').addClass("active");
});

$(document).on('click', '.overlay', function () {
	$('.sidenav').removeClass("active");
	$('.overlay').removeClass("active");
});

$(function () {
	$(window).on("scroll", function () {
		if ($(window).scrollTop() > 50) {
			$(".navscroll").addClass("vscroll");
		} else {
			$(".navscroll").removeClass("vscroll");
		}
	});
});

if(window.location.hash){

    var tabIndex = parseInt(window.location.hash.substring(1));     
}

//Get the button
var mybutton = document.getElementById("btn-float");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}