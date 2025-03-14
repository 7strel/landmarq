function marqueeAnimation() {
	const marqueeContents = document.querySelectorAll('.marquee-content');
	marqueeContents.forEach(marqueeContent => {
		const content = marqueeContent.innerHTML;
		marqueeContent.innerHTML += content;
	});
}

function tabContent () {
	var tabContents = document.querySelectorAll('.tab-content');
	var tabs = document.querySelectorAll('.tabs-nav h2.button-tab a');

	if (tabContents.length === 0 || tabs.length === 0) {
		//console.error('No tabs or tab contents found.');
		return;
	}
	
	Array.from(tabContents).forEach(function(tabContent) {
			tabContent.style.display = 'none';
	});
	
	tabContents[0].style.display = 'block';
	tabs[0].classList.add("active");
	
	Array.from(tabs).forEach(function(tab) {
			tab.addEventListener('click', function(event) {
					event.preventDefault();
					var currentTab = this.getAttribute('href');
					
					Array.from(tabs).forEach(function(tab) {
							tab.classList.remove("active");
					});
					
					this.classList.add("active");
	
					Array.from(tabContents).forEach(function(tabContent) {
							tabContent.style.display = 'none';
					});
					
					var targetTab = document.querySelector(currentTab);
					if (targetTab) {
							targetTab.style.display = 'block';
					}
			});
	});
}

function shareLink() {
	// Get current page details
	var currentURL = encodeURIComponent(window.location.href);
	var currentTitle = encodeURIComponent(document.title);
	
	// Twitter share link
	var twitterShareLink = 'https://twitter.com/intent/tweet?text=' + currentTitle + '&url=' + currentURL;

	// Mail share link
	var mailShareLink = 'mailto:?subject= Vacature ' + currentTitle + '&body=' + currentURL;

	// LinkedIn share link
	var linkedinShareLink = 'https://www.linkedin.com/sharing/share-offsite/?url=' + currentURL + '&title=' + currentTitle;

	// Find and update the Twitter share button
	var twitterShareElement = document.querySelector('#twitter-share .wp-block-boldblocks-svg-block__inner');
	if (twitterShareElement) {
			twitterShareElement.href = twitterShareLink;
	}

	// Find and update the Mail share button
	var mailShareElement = document.querySelector('#mail-share .wp-block-boldblocks-svg-block__inner');
	if (mailShareElement) {
			mailShareElement.href = mailShareLink;
	}
	

	// Find and update the LinkedIn share button
	var linkedinShareElement = document.querySelector('#linkedin-share .wp-block-boldblocks-svg-block__inner');
	if (linkedinShareElement) {
			linkedinShareElement.href = linkedinShareLink;
	}
}

// Call the shareLink function to update both links
//shareLink();

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


function initializeSwiper() {
	new Swiper(".mySwiper", {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: false,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
	});

	// Seleciona todos os elementos com a classe "testimonial"
	var testimonialElements = document.querySelectorAll('.testimonial');

	// Itera sobre cada elemento e adiciona a classe "swiper-slide"
	testimonialElements.forEach(function(element) {
		element.classList.add('swiper-slide');
	});
	
}

window.onload = function () {
	initializeSwiper();
	console.log("Swiper initialized");
};

// function initializeSlick() {
// 	$('.autoplay').slick({
// 		slidesToShow: 3,
// 		slidesToScroll: 1,
// 		autoplay: true,
// 		autoplaySpeed: 2000,
// 	});
// 	console.log("Slick initialized");		
// };

document.addEventListener('DOMContentLoaded', function() {

	marqueeAnimation ();

	tabContent ();
	
	shareLink ();

	//initializeSlick();

	fixedHeader();

});