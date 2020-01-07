(function($){ "use strict";
	$.validator.addMethod('validphone', function (value, element) {
		return this.optional(element) || /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/.test(value);
	}, "Please enter a valid phone number");

	$.fn.extend({
		toggleText: function(a, b){
			return this.text(this.text() == b ? a : b);
		}
	});

	$(document).ready(function(){
		// Start loading custom js here

		$('#menu-toggle').click(function(){
			if ($('#menu-toggle-content').text() == 'MENU') {
				$('#menu-toggle-content').text('X');
				$('#menu-toggle').css({ 'background-color': '#C8C8C8', 'color': '#fff', 'border-radius': 0 });
			} else {
				$('#menu-toggle-content').text('MENU');
				$('#menu-toggle').css({ 'background-color': 'transparent', 'color': '#333' });
			}
		});

		// Background video
		$("#bgndVideo").YTPlayer();

		// Slider carousel
        $("#slider-carousel").owlCarousel({
			loop:true,
			items:1,
			center:true,
			autoplay:true,
			dots: false
		});
        $("#slider-m-carousel").owlCarousel({
			loop:true,
			items:1,
			center:true,
			autoplay:true,
			dots: true,
		});

		// Why carousel
        $("#why-carousel").owlCarousel({
			loop:true,
			items:3,
			center:true,
			autoplay:true,
			URLhashListener:true,
			startPosition: 'URLHash',
			responsive:{
				0:{
					items:1,
					dots:true,
					stagePadding: 10,
				},
				767:{
					items:3,
					dots: false,
				}
			}
		});
		
		// CoolSculpting carousel
        $("#coolsculpting-carousel").owlCarousel({
			loop:true,
			items:1,
			center:true,
			autoplay:false,
			dots: false,
			nav: true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
		});
		
		// CoolTone carousel
        $("#cooltone-carousel").owlCarousel({
			loop:true,
			items:1,
			center:true,
			autoplay:false,
			dots: false,
			nav: true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
		});

		// Schedule form validation
		$("form[name='schedule_form']").validate({
			// Specify validation rules
			rules: {
				// The key name on the left side is the name attribute
				// of an input field. Validation rules are defined
				// on the right side
				schedule_name: "required",
				schedule_phone: {	
					required: true,
					validphone: true
				},
				schedule_title: "required",
				schedule_email: {
					required: true,
					email: true
				},
			},
			// Specify validation error messages
			messages: {
				schedule_name: "Please enter your name",
				schedule_phone: "Please enter a valid phone number",
				schedule_email: "Please enter a valid email address",
				schedule_title: "Please select what you are interested in"
			},
			// Make sure the form is submitted to the destination defined
			// in the "action" attribute of the form when valid
			submitHandler: function(form) {
				// Sending the Schedule form
				$("#contact_me_asap").css({'background-color': '#069e13'});
				$("#contact_me_asap").html('Sending...');
			  	form.submit();
			}
		});

		// Footer User Safety
		$("#use-safety").click(function(){
			$("#f-icon-use-safety").toggleClass('fa-chevron-down fa-chevron-up');
			$("#use-safety-content").toggle();
		});

		// Footer Legal Notice
		$("#legal-notice").click(function(){
			$("#f-icon-legal-notice").toggleClass('fa-chevron-down fa-chevron-up');
			$("#legal-notice-content").toggle();
		});

		// Prices Carousel
		$("#prices-carousel").owlCarousel({
			loop:true,
			items:3,
			center:true,
			autoplay:false,
			dots: true,
			responsive:{
				0:{
					items:1,
				},
				767:{
					items:1,
					stagePadding: 400,
					margin: 100,
					nav: true,
					navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
				}
			}
		});
		$("#prices-carousel").on('changed.owl.carousel', function(event) {
			setTimeout(function(){
				// var activeEls = $('.owl-item.active').eq(1);

				var navData = '#nav-price-' + $('.owl-item.active div.item').attr('data-hash');
				$(".carousel-header ul li").removeClass("active");
				$(navData).parent().addClass('active');
			},1);
		});

		// Add class active for Prices Navigation
		$("[id^=nav-price-]").click(function(e){
			$(".carousel-header ul li").removeClass("active");
			$(this).parent('li').addClass('active');
		});

		// For header bar on mobile
		$('#header-bar-m').click(function(){
			$('#header-bar-m-icon').toggleClass("rotate135");
			$('#header-schedule-m').toggleClass("h-auto");
		});

		// For FAQs animation
		$('.faqs-collapse').click(function(){
			$(this).next('#f-icon-use-safety').toggleClass("rotate180");
		});

	});

	// Show/Hide Header
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		// if (prevScrollpos > currentScrollPos) {
		if (currentScrollPos == 0) {
			// $('#header-bar').show(400);
			// $('#slogan').show(400);
			$('#header-bar').css({ 'margin-top': '0', 'transition': ' margin 200ms' });
		} else {
			// $('#header-bar').hide(400);
			// $('#slogan').hide(400);
			$('#header-bar').css({ 'margin-top': '-44px', 'transition': ' margin 200ms' });

			if (prevScrollpos <= currentScrollPos) {
				// Scrolling down
				// $('.mobile-body').css({ 'margin-top': '33px' });
				// $('.home-top-bar-m').css({ 'top': '71px' });
				
			} else {
				// $('.mobile-body').css({ 'margin-top': 0 });
				// $('.home-top-bar-m').css({ 'top': '38px' });
			}

		}

		prevScrollpos = currentScrollPos;
	}	

	

})(jQuery);