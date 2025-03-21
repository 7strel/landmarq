function marqueeAnimation() {
	const marqueeContents = document.querySelectorAll('.marquee-content');
	marqueeContents.forEach(marqueeContent => {
		const content = marqueeContent.innerHTML;
		marqueeContent.innerHTML += content;
	});
}

function fixedHeader() {
	window.addEventListener('scroll', function() {
			var navbar = document.getElementById('navbar');
			if (window.scrollY > 60) {
					navbar.classList.add('fixed');
			} else {
					navbar.classList.remove('fixed');
			}
	});
}


document.addEventListener('DOMContentLoaded', function() {

	marqueeAnimation ();

	fixedHeader();

});