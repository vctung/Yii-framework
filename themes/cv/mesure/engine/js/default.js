/*-----------------------------| MAIN JS |----------------------------------
 Project 		: MeSure - Profesional vCard, Resume, CV, & Portofolio
 Author 		: Mias Marthinus
----------------------------------------------------------------------------
 Copyright (c) 2015 - MiasStudio 
--------------------------------------------------------------------------*/
"use strict"

//everything do after window loaded
$(window).load(function(){
	
	var 
	
	active_page = 'profile',
	
	/*=========================================================================
	  main-menu hover animation
	=========================================================================*/
	//handler --------------------------------------------
	
	menuActiveChange = function(content){
		$('#main-menu').children('.menu').removeClass('menu-active')
		$('#menu-' + content ).addClass('menu-active')
	},
	
	mouseEnterAct = function(content){
		if( !$.ec.isMobile() ){
			ec('#' + content + '-cover').openPage('none')
			/*ec('#' + content + '-page').openPage('none')
			$('#content-side').css('opacity', '0.2')*/
			$('#cover-side').css('opacity', '0.2')
		}
	},
	
	mouseLeaveAct = function(content){
		if( !$.ec.isMobile() ){
			ec('#' + active_page + '-cover').openPage('none')
			$('#cover-side').css('opacity', '1')
		}
	},
	
	clickAct = function(content){
		active_page = content	
		
		if( $.ec.isMobile() ){
			ec('#' + content + '-cover').openPage('none')
			ec('#' + content + '-page').openPage('none')
		}
		else{
			$('#content-side').css({
				'visibility' : 'hidden',
				'opacity' : '0'
			})
		
			window.setTimeout(function(){	
				ec('#' + content + '-page').openPage('none')
				$('#content-side').css({
					'visibility' : 'visible',
					'opacity' : '1'
				})
			}, 500)
		}
		
		$('#cover-side').css('opacity', '1')
		menuActiveChange(content)
	},
	
	sideResize = function(left_side, right_side){
		//left side
		$('#cover-side')
		.removeClass('l1 l2 l3 l4 l5 l6 l7 l8 l9 l10 l11 l12')
		.addClass(left_side)
		
		//right side
		$('#content-side')
		.removeClass('l1 l2 l3 l4 l5 l6 l7 l8 l9 l10 l11 l12')
		.addClass(right_side)
	}
	
	//profile -------------------------------------------
	$('#menu-profile').on({
		//hover
		//mouse enter
		"mouseenter" : function(){
			if( active_page != 'profile' ){
				mouseEnterAct('profile')
			}
		}, 
		//mouse leave
		"mouseleave" : function(){
			if( active_page != 'profile' ){
				mouseLeaveAct('profile')
			}
		},
		//click
		"click" : function(){
			if( active_page != 'profile' ){
				clickAct('profile')
				//side resize
				//for large screen ***********
				sideResize('l5', 'l6')
			}
		}
	})
	
	//resume -------------------------------------------
	$('#menu-resume').on({
		//hover
		//mouse enter
		"mouseenter" : function(){
			if( active_page != 'resume' ){
				mouseEnterAct('resume')
			}
		}, 
		//mouse leave
		"mouseleave" : function(){
			if( active_page != 'resume' ){
				mouseLeaveAct('resume')
			}
		},
		//click
		"click" : function(){
			if( active_page != 'resume' ){
				clickAct('resume')
				//side resize
				//for large screen ***********
				sideResize('l2', 'l9')
			}
		}
	})
	
	//portofolio -------------------------------------------
	$('#menu-portofolio').on({
		//hover
		//mouse enter
		"mouseenter" : function(){
			if( active_page != 'portofolio' ){
				mouseEnterAct('portofolio')
			}
		}, 
		//mouse leave
		"mouseleave" : function(){
			if( active_page != 'portofolio' ){
				mouseLeaveAct('portofolio')
			}
		},
		//click
		"click" : function(){
			if( active_page != 'portofolio' ){
				clickAct('portofolio')
				//side resize
				//for large screen ***********
				sideResize('l5', 'l6')
			}
		}
	})
	
	//blog -------------------------------------------
	$('#menu-blog').on({
		//hover
		//mouse enter
		"mouseenter" : function(){
			if( active_page != 'blog' ){
				mouseEnterAct('blog')
			}
		}, 
		//mouse leave
		"mouseleave" : function(){
			if( active_page != 'blog' ){
				mouseLeaveAct('blog')
			}
		},
		//click
		"click" : function(){
			if( active_page != 'blog' ){
				clickAct('blog')
				//side resize
				//for large screen ***********
				sideResize('l2', 'l9')
			}
		}
	})
	
	//contact -------------------------------------------
	$('#menu-contact').on({
		//hover
		//mouse enter
		"mouseenter" : function(){
			if( active_page != 'contact' ){
				mouseEnterAct('contact')
			}
		}, 
		//mouse leave
		"mouseleave" : function(){
			if( active_page != 'contact' ){
				mouseLeaveAct('contact')
			}
		},
		//click
		"click" : function(){
			if( active_page != 'contact' ){
				clickAct('contact')
				//side resize
				//for large screen ***********
				sideResize('l5', 'l6')
			}
		}
	})
	
	/*=========================================================================
	  other button click
	=========================================================================*/
	//menu toggle
	$('#menu-toggle').on("click", function(){
		if( $('#menu-toggle').hasClass('menu-toggle-active') ){
			$('#menu-toggle').children('span')
			.removeClass('fa-close')
			.addClass('fa-bars')
			
			$('#menu-toggle').removeClass('menu-toggle-active')
			
			ec('#'+ active_page +'-page').openPage('slide')
		}
		else{
			$('#menu-toggle').children('span')
			.removeClass('fa-bars')
			.addClass('fa-close')
			
			$('#menu-toggle').addClass('menu-toggle-active')
			
			ec('#sub-menu-page').openPage('slide')
		}
	})
	
	//hire button
	$('#hire-button').on("click", function(){
		if( active_page != 'contact' ){
			ec('#contact-cover').openPage('none')
			clickAct('contact')
			//side resize
			//for large screen ***********
			sideResize('l5', 'l6')
		}
	})
	
	
	/*=========================================================================
	  hire button animation
	=========================================================================*/
	var
	
	hire_button_toggle = false,
	 
	hire_button_blink = $.ec.timer(function(){
		if( hire_button_toggle ){
			hire_button_toggle = false
			
			$('#hire-button').css({
				'opacity' : '1'
			})
		}
		else{
			hire_button_toggle = true
			
			$('#hire-button').css({
				'opacity' : '0.2' 
			})
		}
	})
	
	hire_button_blink.play(800)
	
	$('#hire-button').on({
		//hover
		//mouse enter
		mouseenter : function(){
			hire_button_blink.stop()
			$('#hire-button').css({
				'opacity' : '1'
			})
		},
		//mouse leave
		mouseleave : function(){
			hire_button_blink.play(800)
		}
	})
	
	
	/*=========================================================================
	  contact form handler
	=========================================================================*/
	//DO AJAX REQUEST
	var doRequest = function(url, target, callback){
		//do close card ...........................................
		//close wrapper
		$('#wrapper').css({
			'transform' : 'scale(0.5,0)',
			'-webkit-transform' : 'scale(0.5,0)',
			'-ms-transform' : 'scale(0.5,0)',
			'opacity' : '0'
		})
		
		//open loading
		$('#loading').css({
			'opacity' : '1'
		})
		
		//run the animation
		$('#loading-box-left, #loading-box-right').css({
			'-webkit-animation-play-state' : 'running', /* Chrome, Safari, Opera */
			'animation-play-state' : 'running'
		})
		
		//jQuery AJAX ........................................................
		$.ajax({
			url : url,
			dataType : 'html'
		})
		.done(function(data){
			$(target).html(data)
			ec(target).initializing()
		})
		.fail(function(){
			$(target).html('<span class="w3-text-red">Something wrong! <span class="ms-hover" onclick="get-blog-page();"><span class="fa fa-refresh"></span> Try Again ... </span></span>')
		})
		.always(function(){
			
			//do callback if defined
			if( $.isFunction(callback) ){ callback() }
			
			//do open card ............................................
			//open wrapper
			$('#wrapper').css({
				'transform' : 'scale(1,1)',
				'-webkit-transform' : 'scale(1,1)',
				'-ms-transform' : 'scale(1,1)',
				'opacity' : '1'
			})
			
			//close loading
			$('#loading').css({
				'opacity' : '0'
			})
			
			//pause the animation
			$('#loading-box-left, #loading-box-right').css({
				'-webkit-animation-play-state' : 'paused', /* Chrome, Safari, Opera */
				'animation-play-state' : 'paused'
			})
			// .........................................................
		})
	}
	
	//validation -------------------------------------------------------------------
	$('#contact-form-submit').on("click", function(){
		var
			name = $('#contact-form-name').val(),
			email = $('#contact-form-email').val(),
			message = $('#contact-form-message').val(),
			valid = true
		
		//clear all style
		$('#contact-form-name').removeClass('form-invalid')
		$('#contact-form-email').removeClass('form-invalid')
		$('#contact-form-message').removeClass('form-invalid')
		$('#contact-form-response').html('')
		
		//check name	
		if( $.ec.isEmpty(name) ){
			valid = false
			$('#contact-form-name').addClass('form-invalid')
		}
		
		//check email	
		if( $.ec.isEmpty(email) ){
			valid = false
			$('#contact-form-email').addClass('form-invalid')
		}
		else if( email.indexOf('@') == -1 ){ //if hasn't char @ on it
			valid = false
			$('#contact-form-email').addClass('form-invalid')
		}
		
		//check message	
		if( $.ec.isEmpty(message) ){
			valid = false
			$('#contact-form-message').addClass('form-invalid')
		}
		
		if( valid == true ){
			$('#contact-form-response').css({'opacity' : '1'})
			
			doRequest( //do ajax
				'engine/php/contact.php?name=' + name + '&email=' + email + '&message=' + message, 
				'#contact-form-response',
				function(){
					window.setTimeout(function(){
						$('#contact-form-response').css({'opacity' : '0'})
					}, 3000)
				}
			)
		}
		else{
			$('#contact-form-response').css({'opacity' : '1'})
			$('#contact-form-response').html('<span class="w3-text-red"><span class="fa fa-close"></span> Check your input</span>')
			window.setTimeout(function(){
				$('#contact-form-response').css({'opacity' : '0'})
			}, 3000)
		}
	})
	
	/*=========================================================================
	  BLOG : AJAX
	=========================================================================*/
	var blog_request_avail = true
	
	//GET BLOG PAGE --------------------------------------------------------------------
	window.getBlogPage = function(get){
		if( blog_request_avail ){
			blog_request_avail = false
			
			doRequest( //do ajax
				'engine/php/blog_page.php?' + get, 
				'#blog-container',
				function(){ 
					blog_request_avail = true
					document.getElementById('blog-page').scrollTop = 0
					$('#blog-page').perfectScrollbar('update')
				}
			)
		}
	}
	
	//GET BLOG DETAIL -----------------------------------------------------------------
	window.getBlogDetail = function(get){
		if( blog_request_avail ){
			blog_request_avail = false
			
			doRequest( //do ajax
				'engine/php/blog_detail.php?' + get, 
				'#blog-container',
				function(){ 
					blog_request_avail = true
					document.getElementById('blog-page').scrollTop = 0
					$('#blog-page').perfectScrollbar('update') 
				}
			)
		}
	}
	
	//MAIN MENU BLOG : ONCLICK -------------------------------------------------------------
	var blog_first_load = false
	
	$('#menu-blog').on("click", function(){
		if( !blog_first_load ){
			blog_first_load = true
			getBlogPage()
		}
	})
	
	/*=========================================================================
	  PORTOFOLIO : AJAX
	=========================================================================*/
	//GET PORTOFOLIO DETAIL -----------------------------------------------------------------
	var portofolio_request_avail = true
	
	window.getPortofolioDetail = function(get){
		if( portofolio_request_avail ){
			portofolio_request_avail = false
			
			ec('#portofolio-preview-page').openPage('none')
			
			doRequest( //do ajax
				'engine/php/portofolio_detail.php?' + get, 
				'#portofolio-preview-page',
				function(){ 
					portofolio_request_avail = true
					document.getElementById('portofolio-preview-page').scrollTop = 0
					$('#portofolio-preview-page').perfectScrollbar('update') 
				}
			)
		}
	}
	
	window.portofolioHome = function(){
		ec('#portofolio-page').openPage('slide')
	}
	
	/*=========================================================================
	  portofolio button click : categorizing
	=========================================================================*/
	$('#portofolio-button').children('.button').each(function(){
		var 
			target = $(this),
			category = ec(this).getClassValue('category'),
			non_category = $('#portofolio-container').children().not('.category-' + category),
			match_category = $('#portofolio-container').children('.category-' + category),
			all_button = $('#portofolio-button').children('.button')
		
		if( category == 'all' ){
			match_category = $('#portofolio-container').children('.portofolio-item')
		}
		
		$(this).on("click", function(){
			all_button.removeClass('button-active')
			target.addClass('button-active')
			
			$('#portofolio-container').css({
				'visibility' : 'hidden',
				'opacity' : '0',
				'-ms-transform' : 'scale(0,1)', 
				'-webkit-transform' : 'scale(0,1)', 
				'transform' : 'scale(0,1)' 
			})
			
			non_category.hide()
			match_category.show()
			
			$('#portofolio-page').perfectScrollbar('update')
			
			window.setTimeout(function(){
				$('#portofolio-container').css({
					'visibility' : 'visible',
					'opacity' : '1',
					'-ms-transform' : 'scale(1,1)', 
					'-webkit-transform' : 'scale(1,1)', 
					'transform' : 'scale(1,1)' 
				})
			} ,300)
		})
	})
	
	/*=========================================================================
	  timeline hover animation
	=========================================================================*/
	$('.timeline').each(function(){
		var target = $(this)
		
		$(this).on({
			//mouse enter
			"mouseenter" : function(){
				if( !$.ec.isMobile() ){
					target.find('.timeline-pin')
					.addClass('accent-bg')
					.css({
						'-ms-transform' : 'scale(1.5,1.5)', 
						'-webkit-transform' : 'scale(1.5,1.5)', 
						'transform' : 'scale(1.5,1.5)' 
					})
				}
			},
			//mouse leave
			"mouseleave" : function(){
				if( !$.ec.isMobile() ){
					target.find('.timeline-pin')
					.removeClass('accent-bg')
					.css({
						'-ms-transform' : 'scale(1,1)', 
						'-webkit-transform' : 'scale(1,1)', 
						'transform' : 'scale(1,1)'
					})
				}
			}
		})
	})
	
	/*=========================================================================
	  portofolio hover animation
	=========================================================================*/
	$('.portofolio-item').each(function(){
		var 
			target = $(this),
			src = $(this).find('img').attr('src')
			
		$(this).on({
			//mouse enter
			"mouseenter" : function(){
				if( !$.ec.isMobile() ){
					$('#portofolio-preview')
					.attr('src', src)
					.ec().stayCenter('y', true, true, false)
					
					$('#portofolio-filter').css({
						'opacity' : '1'
					})
				}
			},
			//mouse leave
			"mouseleave" : function(){
				if( !$.ec.isMobile() ){
					$('#portofolio-filter').css({
						'opacity' : '0'
					})
				}
			}
		})
	})
	
	/*=========================================================================
	  rotate animation
	=========================================================================*/
	var 
	
	rotate_toggle = true,
	
	rotate_animation = $.ec.timer(function(){
		if( rotate_toggle ){
			rotate_toggle = false
			
			$('.rotate-animation').css({
				'-ms-transform' : 'rotateY(360deg)', 
				'-webkit-transform' : 'rotateY(360deg)', 
				'transform' : 'rotateY(360deg)' 
			})
		}
		else{
			rotate_toggle = true
			
			$('.rotate-animation').css({
				'-ms-transform' : 'rotateY(0deg)', 
				'-webkit-transform' : 'rotateY(0deg)', 
				'transform' : 'rotateY(0deg)' 
			})
		}
	})
	
	rotate_animation.play(3000)
	
	/*=========================================================================
	  fade animation
	=========================================================================*/
	var 
	
	fade_toggle = true,
	
	fade_animation = $.ec.timer(function(){
		if( fade_toggle ){
			fade_toggle = false
			
			$('.fade-animation').css({
				'opacity' : '0.2' 
			})
		}
		else{
			fade_toggle = true
			
			$('.fade-animation').css({
				'opacity' : '1' 
			})
		}
	})
	
	fade_animation.play(1000)
	
	/*=========================================================================
	  scrollbar replaceer : scroll menu
	=========================================================================*/
	$('.perfect-scrollbar').each(function(){
		var target = $(this)
		
		target.perfectScrollbar({
			wheelSpeed : 1,
			suppressScrollX : true
		})
		
		$(window).resize(function(){
			target.perfectScrollbar('update')
		})
		 
	})
	
	/*=========================================================================
	  open animation
	=========================================================================*/
	//body can overflow
	$('body').css('overflow-y', 'auto')
	
	//open wrapper
	$('#wrapper').css({
		'transform' : 'scale(1,1)',
		'-webkit-transform' : 'scale(1,1)',
		'-ms-transform' : 'scale(1,1)',
		'opacity' : '1'
	})
	
	//close loading
	$('#loading').css({
		'opacity' : '0'
	})
	
	//pause the animation
	$('#loading-box-left, #loading-box-right').css({
		'-webkit-animation-play-state' : 'paused', /* Chrome, Safari, Opera */
		'animation-play-state' : 'paused'
	})
})


/*=========================================================================
  google map
=========================================================================*/
//get your address coordinate from http://www.mapcoordinates.net
//then insert LATITUDE in the left and LONGITUDE in the right
var myCenter = new google.maps.LatLng(-7.9726493, 112.6586009);

function map_initializing() {
	var mapProp = {
		center:myCenter,
		zoom:13,
		panControl:false,
		zoomControl:false,
		mapTypeControl:false,
		scaleControl:false,
		streetViewControl:false,
		overviewMapControl:false,
		rotateControl:false,  
		mapTypeId:google.maps.MapTypeId.ROADMAP
	}
	
	var 
	
	//map create
	map = new google.maps.Map(document.getElementById("contact-cover"), mapProp),
	
	//marker
	marker = new google.maps.Marker({
		position:myCenter,
		animation:google.maps.Animation.BOUNCE
	});

	marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', map_initializing)