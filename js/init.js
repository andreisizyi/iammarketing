/*Выбор анимации для мобильного и пк*/
jQuery( document ).ready(function() {
	if (jQuery(window).width() > 768) {
        jQuery('.canvas-frame').attr('src','/wp-content/themes/iammarketing/parts/canvas.html');
    }
    else {
        jQuery('.canvas-frame').attr('src','/wp-content/themes/iammarketing/parts/canvas_mobile.html');
    }
});
/*Smooth scroll to anchor*/
jQuery(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();
    jQuery('html, body').animate({
        scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
    }, 800);
});
/*Lax options*/
var eventFired = 0;
if (jQuery(window).width() > 768) {
	laxjs();
    eventFired = 1;
}
jQuery(window).on('resize', function() {
    if (!eventFired) {
        if (jQuery(window).width() > 768) {
            laxjs();
        }
    }
});
function laxjs() {
	window.onload = function () {
	  lax.setup();
	  var updateLax = function updateLax() {
		lax.update(window.scrollY);
		window.requestAnimationFrame(updateLax);
	  };
	  window.requestAnimationFrame(updateLax); 
	};
}
lax.addPreset("lazy200", function() {
	return{"data-lax-translate-y":"(vh) 0, (-vh/3) 200"}
});
lax.addPreset("lazy100", function() {
	return{"data-lax-translate-y":"(vh) 0, (-vh/3) 100"}
});
lax.addPreset("lazy230", function() {
	return{"data-lax-translate-y":"(vh) 0, (-vh/3) 250"}
});
lax.addPreset("lazy115", function() {
	return{"data-lax-translate-y":"(vh) 0, (-vh/3) 130"}
});
/*menu*/
function scroll() {
	if (jQuery(document).scrollTop() > 30) {
        jQuery('header').addClass('small-m');
    }
    else {
        jQuery('header').removeClass('small-m');
    }
}
jQuery( document ).ready(function() {
    jQuery('.toggle-m').click( function() {
		jQuery('header').toggleClass('active');
	});
	scroll();
	jQuery(window).scroll(function() {
        scroll();
    });
});
/* h-space */
function hspace() {
	if (jQuery(window).width() < 768) {
		jQuery('.h-space').height(jQuery('header .menu-m').height() + jQuery('.breadcrumbs').height() +  40);
	}  else {
		jQuery('.h-space').css('height','16vw');
	}
}
jQuery( document ).ready(function() {
	hspace();
});
jQuery(window).on('resize', function() {
    hspace();
});
/* footer menu */
function fmenu() {
	if (jQuery(window).width() < 768) {
		jQuery(".tc ul li").each(function() {       
		 if (jQuery(this).hasClass('active')) {  
		  jQuery(this).parent().parent().addClass('active');        
		 }  
		});
	}
}
jQuery( document ).ready(function() {
	jQuery('.f-title').click( function() {
		jQuery(this).parent().toggleClass('active');
	});
	fmenu();
});
jQuery(window).on('resize', function() {
    fmenu();
});