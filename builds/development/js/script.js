
$(document).ready(function(){
	
	/*Hide Elements for transition in */	
	$('header').hide().fadeOut();
	$('#logo').hide().fadeOut();
	$('#logoDesc').hide().fadeOut();
	$('#about article').hide().fadeOut();
	
	$('#about-section').hide().fadeOut();
	$('#work-section').hide().fadeOut();
	$('#launchbx-section').hide().fadeOut();
	$('#groovable-section').hide().fadeOut();
	$('#ooto-section').hide().fadeOut();	
	/*End Hide Elements for transition in */	
	
	//Fade in the Header, Logo and Navigation
	fadeInLogo(fadeInNavigation);
	
	var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;	
	var pagesArray = ['about','work','launchbx','groovable','ooto'];
	var currentPage = '#about';
	var currentPageIndex = 0;
	var totalPages = pagesArray.length-1;
	var previousPage;
	var pageHash;
	handleActiveBtn(currentPage);
	
	//Set Section Colors for Gradient Nav
	var aboutStartColor = [240, 240, 240, .5];
	var aboutStopColor = [0, 51, 255, 0.5]; [40, 40, 40, .5];

	var workStartColor = [235, 235, 235, 0.5];
	var workStopColor = [255, 0, 51, 0.5]//[153, 204, 255, 0.3];
	
	var launchbxStartColor = [130,145,251,0.2];
	var launchbxStopColor = [0, 245, 0, 0.5]; //[51, 51, 51,0.5];
	
	var groovableStartColor = [211, 211, 211, 0.4];
	var groovableStopColor = [0, 0, 236, 0.5]; //[255, 153, 51, 0.5];
	
	/* Set Initial Color Values for Gradient Nav */	
	var CurrStartColor = aboutStartColor;//[255, 255, 255, 0.4];
	var CurrStopColor = aboutStopColor; //[115, 115, 115, 0.4];
	var startColor = aboutStartColor;
	var stopColor = aboutStopColor;
	
	
	/****** Button Events ********/
	
	$('#about-section').click(function(event) {			
		event.preventDefault();
		pageHash = $(this).attr('href');		
		handleActiveBtn('#about');
		scrollWin("#about");			
		gradient(CurrStartColor, CurrStopColor, aboutStartColor, aboutStopColor, true);
		CurrStartColor = aboutStartColor;
		CurrStopColor = aboutStopColor;	
	});
	
	$('#work-section').click(function(event) {	
		event.preventDefault();
		handleActiveBtn('#work');
		pageHash = $(this).attr('href');  		
		scrollWin("#work");		
		gradient(CurrStartColor, CurrStopColor, workStartColor, workStopColor, true);
		CurrStartColor = workStartColor;
		CurrStopColor = workStopColor;
	});
	
	$('#launchbx-section').click(function(event) {
		event.preventDefault();
		pageHash = $(this).attr('href');
		handleActiveBtn('#launchbx');
		scrollWin("#launchbx");	
		gradient(CurrStartColor, CurrStopColor, launchbxStartColor, launchbxStopColor, true);
		CurrStartColor = launchbxStartColor;
		CurrStopColor = launchbxStopColor;

	});
	
	$('#groovable-section').click(function(event) {
		event.preventDefault();
		pageHash = $(this).attr('href');		
		handleActiveBtn('#groovable');
		scrollWin("#groovable");
		gradient(CurrStartColor, CurrStopColor, workStartColor, workStopColor, true);
		CurrStartColor = workStartColor;
		CurrStopColor = workStopColor;
	});
	
	$('#ooto-section').click(function(event) {
		event.preventDefault();
		pageHash = $(this).attr('href');
		handleActiveBtn('#ooto');
		scrollWin("#ooto");
		gradient(CurrStartColor, CurrStopColor, aboutStartColor, aboutStopColor, true);
		CurrStartColor = aboutStartColor;
		CurrStopColor = aboutStopColor;	
	});
	
	
	/****** End Button Events ********/
	
	
	
	/* Set Current Section */
	function handleActiveBtn(newBtn){
		previousPage = currentPage;
		currentPage = newBtn;
		previousBtn = previousPage + '-section';
		$(previousBtn).removeClass('active');		
		currentBtn = newBtn + '-section';
		$(currentBtn).addClass('active');		
	}


	var scrollStep = 0;
	var updateGradient;
	
	/*  Gradient Animation  */
	function gradient(CurrStartColor, CurrStopColor, startColor, stopColor, isInterval)
	{
		// target to give background to
		var $div = document.getElementById("head");
		// rgb vals of the gradients
		var gradients = [];
		var newSection = false;

		gradients = [
			{ start: CurrStartColor, stop: CurrStopColor },
			{ start: startColor, stop: stopColor }
		];
		
		setNewColors = function(CurrStartColor, CurrStopColor, startColor, stopColor){
			gradients = [
				{ start: CurrStartColor, stop: CurrStopColor },
				{ start: startColor, stop: stopColor }
			];
			console.log("New Colors: " + startColor);
		}
		

		// how long for each transition
		var transition_time = 1;
		// how many frames per second
		var fps = 60;


		// interal type vars
		var go = true;
		var timer; // for the setInterval
		var interval_time = Math.round(1000/fps); // how often to interval
		var currentIndex = 0; // where we are in the gradients array
		var nextIndex = 1; // what index of the gradients array is next
		var steps_count = 0; // steps counter
		var steps_total = Math.round(transition_time*fps); // total amount of steps
		var rgb_steps = {
		  start: [0,0,0,0],
		  stop: [0,0,0,0]
		}; // how much to alter each rgb value
		var rgb_values = {
		  start: [0,0,0,0],
		  stop: [0,0,0,0]
		}; // the current rgb values, gets altered by rgb steps on each interval
		var prefixes = ["-webkit-","-moz-","-o-","-ms-",""]; // for looping through adding styles
		var div_style = $div.style; // short cut to actually adding styles
		var gradients_tested = false;
		var color1, color2;

		// sets next current and next index of gradients array
		function set_next(num) {
		  return (num + 1 < gradients.length) ? num + 1 : 0;
		}

		// work out how big each rgb step is
		function calc_step_size(a,b) {
		  return (a - b) / steps_total;
		}

		// populate the rgb_values and rgb_steps objects
		function calc_steps() {
		  for (var key in rgb_values) {
		    if (rgb_values.hasOwnProperty(key)) {
		      for(var i = 0; i < 4; i++) {
		        rgb_values[key][i] = gradients[currentIndex][key][i];
		        rgb_steps[key][i] = calc_step_size(gradients[nextIndex][key][i],rgb_values[key][i]);
		      }
		    }
		  }
		}

		// update current rgb vals, update DOM element with new CSS background
		updateGradient = function(direction, isScrolling){
			
			/*
			if(new_total_steps){
				steps_total = new_total_steps;
				console.log("new steps_total: " + steps_total);
				console.log("default steps_total: " + steps_total);
			}
			else{
				steps_total = steps_total;
				console.log("default steps_total: " + steps_total);
			}
			*/

		  // update the current rgb vals
		  for (var key in rgb_values) {
		    if (rgb_values.hasOwnProperty(key)) {
		      for(var i = 0; i < 4; i++) {
		        rgb_values[key][i] += rgb_steps[key][i];
		      }
		    }
		  }

		  // generate CSS rgb values
		  var t_color1 = "rgba("+(rgb_values.start[0] | 0)+","+(rgb_values.start[1] | 0)+","+(rgb_values.start[2] | 0)+","+(rgb_values.start[3].toFixed(2))+")";
		  var t_color2 = "rgba("+(rgb_values.stop[0] | 0)+","+(rgb_values.stop[1] | 0)+","+(rgb_values.stop[2] | 0)+","+(rgb_values.stop[3].toFixed(2))+")";

		  // has anything changed on this interation
		  if (t_color1 != color1 || t_color2 != color2) {

		    // update cols strings
		    color1 = t_color1;
		    color2 = t_color2;

		    // update DOM element style attribute
		    div_style.backgroundImage = "-webkit-gradient(linear, left bottom, right top, from("+color1+"), to("+color2+"))";
		    for (var i = 0; i < 3; i++) {
		      div_style.backgroundImage = prefixes[i]+"linear-gradient(45deg, "+color1+", "+color2+")";
		    }
		  }

		  // test if the browser can do CSS gradients
		  if (div_style.backgroundImage.indexOf("gradient") == -1 && !gradients_tested) {
		    // if not, kill the timer
		    clearTimeout(timer);
		  }
		  gradients_tested = true;


		  //steps_count++;
		  
		 
		  
		  st = $(window).scrollTop();
		  console.log("scroll top: " + st);
		  
		  offset = 1500 - st;
		  console.log("offset: " + offset);
		  
		  
		  
		  if(isScrolling == true){
			  steps_count++;
		  }else{
		  	steps_count++;
		  }
		  
	  	  console.log("current step: " + steps_count);
		  //console.log("new steps_total: " + steps_total);
		  //console.log("default steps_total: " + steps_total);
	  			  
		  // did we do too many steps?
		  if (steps_count > steps_total) {
		    // reset steps count
		    steps_count = 0;
			scrollStep = 0;
			
		    // set new indexs
			
			
			if(currentPageIndex >= totalPages){
				//currentPageIndex = 0; //don't reset now, as we'll be at the bottom
			}
				
			if(direction == 'up'){
				currentPageIndex--;
			}else{
				currentPageIndex++;
			}
			
			console.log("Direction: " + direction);			
			console.log("currentPageIndex: " + currentPageIndex);
			console.log("Next page is: " + pagesArray[currentPageIndex]);

			
			clearTimeout(timer);
			currentIndex = set_next(currentIndex);
			nextIndex = set_next(nextIndex);
			
			console.log("********************************************");

		    // calc steps
		    calc_steps();
		  }
		}

		// initial step calc
		calc_steps();

		// go go go!
		if(isInterval == true){
			timer = setInterval(updateGradient,interval_time);
		}
		else if(isInterval == false){
			clearTimeout(timer);			
		}
		
	}
	
	/*  End Gradient Animation  */


	gradient(CurrStartColor, CurrStopColor, startColor, stopColor, true);
	
	
	
	var lastScrollTop = 0,
        st,
        direction;

    function detectDirection() {
    
        st = window.pageYOffset;
        
        if (st > lastScrollTop) {
            direction = "down";
        } else {
            direction = "up";
        }
        
        lastScrollTop = st;
        
        return  direction;
        
    }

    $(window).bind('scroll', function() {
    
        direction = detectDirection();
        //console.log(detectDirection());
		
		if(scrollStep == 0){
			gradient(CurrStartColor, CurrStopColor, workStartColor, workStopColor, false);
		}
		else{
			updateGradient(direction, true);
		}		
		scrollStep++;
    });
	

			
	/****************************************************************/
	/************************   Window Scroll   ********************/
					
	// Cache the Window object
	$window = $(window);
	
	// Cache the Y offset and the speed of each sprite
	$('[data-type]').each(function() {	
		$(this).data('offsetY', parseInt($(this).attr('data-offsetY')));
		$(this).data('Xposition', $(this).attr('data-Xposition'));
		$(this).data('speed', $(this).attr('data-speed'));
		$(this).data('id', $(this).attr('id'));
	});
	
	// For each element that has a data-type attribute
	$('section[data-type="background"]').each(function(){

		// Store some variables based on where we are
		var $self = $(this),
			offsetCoords = $self.offset(),
			topOffset = offsetCoords.top;
		
		// When the window is scrolled...
	    $(window).scroll(function() {
	
			// If this section is in view
			if ( ($window.scrollTop() + $window.height()) > (topOffset) &&
				 ( (topOffset + $self.height()) > $window.scrollTop() ) ) {
					
				$('#device').css('height', '200px');
	
				// Scroll the background at var speed
				// the yPos is a negative value because we're scrolling it UP!								
				var yPos = -($window.scrollTop() / $self.data('speed'));
				
				if(!yPos) yPos = 0;
				
				// If this element has a Y offset then add it on
				if ($self.data('offsetY')) {
					yPos += $self.data('offsetY');
				}
				
				// Put together our final background position
				var coords = '50% '+ yPos + 'px';
				
				var section = '#' + $self.data('id');
				var page = $self.data('id');
				handleActiveBtn(section);
				
				//console.log("section: " + page);
				
				//CurrStartColor = [255, 153, 51, 0.5];
				//CurrStopColor = [255, 153, 51, 0.5];
				//gradient(CurrStartColor, CurrStopColor, CurrStartColor, CurrStopColor, false);

				//console.log("CurrStartColor: " + CurrStartColor);
				

				// Move the background
				$self.css('-webkit-transform: translate3d(0,0,0)');
				$self.css({ backgroundPosition: coords });
							
				// Check for other sprites in this section	
				$('[data-type="sprite"]', $self).each(function() {
					
					// Cache the sprite
					var $sprite = $(this);

					// Use the same calculation to work out how far to scroll the sprite
					var yPos = -($window.scrollTop() / $sprite.data('speed'));					
					var coords = $sprite.data('Xposition') + ' ' + (yPos + $sprite.data('offsetY')) + 'px';
					
					$sprite.css({ backgroundPosition: coords });	

				}); // sprites
				
			
				/*
				// Check for any Videos that need scrolling
				$('[data-type="video"]', $self).each(function() {
					
					// Cache the video
					var $video = $(this);
					
					// There's some repetition going on here, so 
					// feel free to tidy this section up. 
					var yPos = -($window.scrollTop() / $video.data('speed'));					
					var coords = (yPos + $video.data('offsetY')) + 'px';
	
					$video.css({ top: coords });													
					
				}); // video	
				*/
			
			}; // in view
	
		$('#device').css('height', '0px');
		}); // window scroll
			
	});	// each data-type
	
	
	/**********************   End Window Scroll   *******************/
	/****************************************************************/
	
	
	
	
	
	
	
		
		//now load the other images that we were hiding	
		$('#thelist img').each(function(){
		  $(this).attr('src', $(this).attr('id'));
		});
		
		//imageUrl = "img/clouds1.png";
		lbxScreen = "img/launcher-screenshot.png";
		grScreen = "img/groovable-overview.png";
		ootoScreen = "img/ooto1.png";
		experScreen = "img/groovable-overview.png";
		
		/*
		$('#about .clouds').css('background-image', 'url(' + imageUrl + ')');
		$('#work .clouds').css('background-image', 'url(' + imageUrl + ')');
		$('#launchbx .clouds').css('background-image', 'url(' + imageUrl + ')');
		*/
		
		$('#launchbx .screenshot').css('background-image', 'url(' + lbxScreen + ')');
		$('#groovable .screenshot').css('background-image', 'url(' + grScreen + ')');
		$('#ooto .screenshot').css('background-image', 'url(' + ootoScreen + ')');
		$('#experiments .screenshot').css('background-image', 'url(' + experScreen + ')');
		

}); // document ready








/*  Fade Animations  */
function fadeInLogo(next){
	$('header').fadeIn(300);
	$('header').animate({width: '100%'}, 1000, function(){
		next(fadeSection);
	});
	
	$('#logo').fadeIn(1000, function(){});	
	$('#logoDesc').fadeIn(2000, function(){});
}
function fadeInNavigation(next){	
	$('#ooto-section').fadeIn(300, function(){
		$('#groovable-section').fadeIn(300, function(){
			$('#launchbx-section').fadeIn(300, function(){
				$('#work-section').fadeIn(300, function(){
					$('#about-section').fadeIn(200, next());
				});
			});
		});
	});	
}
function fadeSection(){
	$('#about article').fadeIn(600, function(){});		
}
/* End Fade Animations */


function scrollWin(section){
	$('html,body').animate({
	scrollTop: $(section).offset().top}, 1200, function(){
		window.location.hash = section;
	});
}




// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
