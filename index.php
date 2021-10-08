<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/css/style.css"> <!-- Resource style -->
	<?php wp_head(); ?>
	<script src="/js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Balsem-el-chafy</title>
</head>
<body>
	<section class="cd-section">
		<div class="cd-block" style="transform: scale(1); opacity: 1; background-image: url('../img/الشعار النهائي2.jpg');
  background-size: cover;">
			<h1>Balsem-el-chafy</h1>
			<img src="/img/logo.jpg" alt="Girl in a jacket" >
		</div>
	</section> <!-- .cd-section -->

	<section class="cd-section">
		<div class="cd-block">
			<div class="cd-half-block"></div>

			<div class="cd-half-block">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eos labore ratione illum excepturi neque sunt blanditiis ducimus soluta quae!
				</p>
			</div>
		</div>
	</section> <!-- .cd-section -->

	<section class="cd-section">
		<div class="cd-block">
			<div class="cd-half-block"></div>

			<div class="cd-half-block">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eos labore ratione illum excepturi neque sunt blanditiis ducimus soluta quae!
				</p>
			</div>
		</div>
	</section>

	<section class="cd-section">
		<div class="cd-block">
			<div class="cd-half-block"></div>

			<div class="cd-half-block">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eos labore ratione illum excepturi neque sunt blanditiis ducimus soluta quae!
				</p>
			</div>
		</div>
	</section> <!-- .cd-section -->

	<section class="cd-section">
		<div class="cd-block">
			<div class="cd-half-block"></div>

			<div class="cd-half-block">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores eos labore ratione illum excepturi neque sunt blanditiis ducimus soluta quae!
				</p>
			</div>
		</div>
	</section> <!-- .cd-section -->

	<nav>
		<ul class="cd-vertical-nav">
			<li><a href="#0" class="cd-prev inactive">Next</a></li>
			<li><a href="#0" class="cd-next">Prev</a></li>
		</ul>
		<ul class="cd-vertical-nav1">
			<li><a href="#0" class="cd-prev inactive">Next</a></li>
			<li><a href="#0" class="cd-next">Prev</a></li>
		</ul>
	</nav> <!-- .cd-vertical-nav -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
	jQuery(document).ready(function($){
	//change this value if you want to change the speed of the scale effect
	var	scaleSpeed = 0.3,
	//change this value if you want to set a different initial opacity for the .cd-half-block
		boxShadowOpacityInitialValue = 0.7,
		animating = false; 
	
	//check the media query 
	var MQ = window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	$(window).on('resize', function(){
		MQ = window.getComputedStyle(document.querySelector('body'), '::before').getPropertyValue('content').replace(/"/g, "").replace(/'/g, "");
	});

	//bind the animation to the window scroll event
	triggerAnimation();
	$(window).on('scroll', function(){
		triggerAnimation();
	});

	//move to next/previous section
    $('.cd-vertical-nav .cd-prev').on('click', function(){
    	prevSection();
    });
    $('.cd-vertical-nav .cd-next').on('click', function(){
    	nextSection();
    });
    $(document).keydown(function(event){
		if( event.which=='38' ) {
			prevSection();
			event.preventDefault();
		} else if( event.which=='40' ) {
			nextSection();
			event.preventDefault();
		}
	});

	function triggerAnimation(){
		if(MQ == 'desktop') {
			//if on desktop screen - animate sections
			(!window.requestAnimationFrame) ? animateSection() : window.requestAnimationFrame(animateSection);
		} else {
			//on mobile - remove the style added by jQuery 
			$('.cd-section').find('.cd-block').removeAttr('style').find('.cd-half-block').removeAttr('style');
		}
		//update navigation arrows visibility
		checkNavigation();
	}
	
	function animateSection () {
		var scrollTop = $(window).scrollTop(),
			windowHeight = $(window).height(),
			windowWidth = $(window).width();
		
		$('.cd-section').each(function(){
			var actualBlock = $(this),
				offset = scrollTop - actualBlock.offset().top,
				scale = 1,
				translate = windowWidth/2+'px',
				opacity,
				boxShadowOpacity;

			if( offset >= -windowHeight && offset <= 0 ) {
				//move the two .cd-half-block toward the center - no scale/opacity effect
				scale = 1,
				opacity = 1,
				translate = (windowWidth * 0.5 * (- offset/windowHeight)).toFixed(0)+'px';

			} else if( offset > 0 && offset <= windowHeight ) {
				//the two .cd-half-block are in the center - scale the .cd-block element and reduce the opacity
				translate = 0+'px',
				scale = (1 - ( offset * scaleSpeed/windowHeight)).toFixed(5),
				opacity = ( 1 - ( offset/windowHeight) ).toFixed(5);

			} else if( offset < -windowHeight ) {
				//section not yet visible
				scale = 1,
				translate = windowWidth/2+'px',
				opacity = 1;

			} else {
				//section not visible anymore
				opacity = 0;
			}
			
			boxShadowOpacity = parseInt(translate.replace('px', ''))*boxShadowOpacityInitialValue/20;
			
			//translate/scale section blocks
			scaleBlock(actualBlock.find('.cd-block'), scale, opacity);

			var directionFirstChild = ( actualBlock.is(':nth-of-type(even)') ) ? '-': '+';
			var directionSecondChild = ( actualBlock.is(':nth-of-type(even)') ) ? '+': '-';
			if(actualBlock.find('.cd-half-block')) {
				translateBlock(actualBlock.find('.cd-half-block').eq(0), directionFirstChild+translate, boxShadowOpacity);
				translateBlock(actualBlock.find('.cd-half-block').eq(1), directionSecondChild+translate, boxShadowOpacity);	
			}
			//this is used to navigate through the sections
			( offset >= 0 && offset < windowHeight ) ? actualBlock.addClass('is-visible') : actualBlock.removeClass('is-visible');		
		});
	}

	function translateBlock(elem, value, shadow) {
		var position = Math.ceil(Math.abs(value.replace('px', '')));
		
		if( position >= $(window).width()/2 ) {
			shadow = 0;	
		} else if ( position > 20 ) {
			shadow = boxShadowOpacityInitialValue;
		}

		elem.css({
		    '-moz-transform': 'translateX(' + value + ')',
		    '-webkit-transform': 'translateX(' + value + ')',
			'-ms-transform': 'translateX(' + value + ')',
			'-o-transform': 'translateX(' + value + ')',
			'transform': 'translateX(' + value + ')',
			'box-shadow' : '0px 0px 40px rgba(0,0,0,'+shadow+')'
		});
	}

	function scaleBlock(elem, value, opac) {
		elem.css({
		    '-moz-transform': 'scale(' + value + ')',
		    '-webkit-transform': 'scale(' + value + ')',
			'-ms-transform': 'scale(' + value + ')',
			'-o-transform': 'scale(' + value + ')',
			'transform': 'scale(' + value + ')',
			'opacity': opac
		});
	}

	function nextSection() {
		if (!animating) {
			if ($('.cd-section.is-visible').next().length > 0) smoothScroll($('.cd-section.is-visible').next());
		}
	}

	function prevSection() {
		if (!animating) {
			var prevSection = $('.cd-section.is-visible');
			if(prevSection.length > 0 && $(window).scrollTop() != prevSection.offset().top) {
				smoothScroll(prevSection);
			} else if(prevSection.prev().length > 0 && $(window).scrollTop() == prevSection.offset().top) {
				smoothScroll(prevSection.prev('.cd-section'));
			}
		}
	}

	function checkNavigation() {
		( $(window).scrollTop() < $(window).height()/2 ) ? $('.cd-vertical-nav .cd-prev').addClass('inactive') : $('.cd-vertical-nav .cd-prev').removeClass('inactive');
		( $(window).scrollTop() > $(document).height() - 3*$(window).height()/2 ) ? $('.cd-vertical-nav .cd-next').addClass('inactive') : $('.cd-vertical-nav .cd-next').removeClass('inactive');
	}

	function smoothScroll(target) {
		animating = true;
        $('body,html').animate({'scrollTop': target.offset().top}, 500, function(){ animating = false; });
	}
});
</script>
</body>
</html>
