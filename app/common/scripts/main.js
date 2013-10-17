/*global $ */

'use strict';

$('document').ready(function()
{
    $('#nav li[data-section="' + window.location.hash + '"]').addClass('active');
    
	/** Navigation scrolling **/
	$('#nav li').click(function(event)
	{
        $('#nav li').removeClass('active');
        $(this).addClass('active');
        
		event.preventDefault();
		
		var section = $(this).attr('data-section');
		
		var offset = $(section).offset().top;
        
		$('html, body').animate({ scrollTop:offset }, 'slow', function () {
            window.location.hash = section;
        });
	});
	
	/** Contact form **/
	$('#contact-form').submit(function(e)
	{
		e.preventDefault();
		
		//Ensure exisiting content doesn't collapse on itself
		$('#contact-form-wrapper').css('height', $('#contact-form').height());
        
		$('#contact-form').fadeOut('slow', function()
		{
			$('#contact-form').ajaxSubmit(
			{
				success: function(data)
				{
					$('#contact-form').html(data);
					
					//How tall is the new content?
					var formHeight = $('#contact-form').height();
					
					//Animate to the new height
					$('#contact-form-wrapper').animate({'height': formHeight}, function()
					{
						$('#contact-form').fadeIn('slow');
					});
				}
			});
		});
	});
	
	/** Back to top **/
	$('#back-to-top').click(function()
	{
		$('html, body').animate({scrollTop:0}, 'slow');
	});
	
	if ($('html').hasClass('csstransforms') && Modernizr.mq('(min-width: 700px)')) {
		var $gear1 = $('#gear1');
		var $gear2 = $('#gear2');
		var $gear3 = $('#gear3');
		var $window = $(window);
		
		$(window).scroll(function (e)
		{
			var degrees = Math.floor($window.scrollTop() / 15);
			
			var rotationGear1 = degrees;
			var rotationGear2 = -1 * (1.5 * degrees);
			var rotationGear3 = -1 * (3 * degrees);
			
			$gear1.css({ 'transform': 'rotate(' + rotationGear1 + 'deg)'});
			$gear2.css({ 'transform': 'rotate(' + rotationGear2 + 'deg)'});
			$gear3.css({ 'transform': 'rotate(' + rotationGear3 + 'deg)'});
		});	
	}
});