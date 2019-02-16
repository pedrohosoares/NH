// JavaScript Document


jQuery(document).ready(function(jQuery){
"use strict";
//  Settings Panel 
	jQuery('.open-buttton').click(function(){
	
		if(jQuery('.open-buttton').hasClass('closed')){
			jQuery(this).parent('.settings-panel').stop().animate({left:225},400);
			jQuery(this).removeClass('closed').addClass('opened');
		} else {
			jQuery(this).parent('.settings-panel').stop().animate({left:0},400);
			jQuery(this).removeClass('opened').addClass('closed');
		}
	});


// Bacground Patterns and Background Colour 
	
jQuery('.settings-panel .bg_patterns ul li').click(function(){
		var thisBGimg = jQuery(this).css('background-image');
		jQuery('body').css('background-image', thisBGimg);
	});

jQuery('.color').click(function(){
		var thisBGcol = jQuery(this).css('background-color');
		jQuery('body').css('background-color', thisBGcol);
	});
	
		jQuery('.settings-panel .card_patterns ul li').click(function(){
		var thisBGcol = jQuery(this).css('background-color');
		var thisBGimg = jQuery(this).css('background-image');
		jQuery('.card-pattern').css('background-image', thisBGimg);
		jQuery('.card-pattern').css('background-color', thisBGcol);
	});
	
		 jQuery("ul.c_patterns li").click(function () {
			 var myClass = jQuery(this).attr("class");
			if(myClass == 'default'){
			jQuery('#color').attr('href','css/style.css');
					jQuery("#logo").attr("src","images/logo.html");
		}else if(myClass == 'c1'){
		jQuery('#color').attr('href','css/colour_1.css');
		jQuery("#logo").attr("src","images/c1.html");
			} else if(myClass == 'c2'){
		jQuery('#color').attr('href','css/colour_2.css');
				jQuery("#logo").attr("src","images/c2.html");
			} else if(myClass == 'c3'){
		jQuery('#color').attr('href','css/colour_3.css');
						jQuery("#logo").attr("src","images/c3.html");
			} else if(myClass == 'c4'){
		jQuery('#color').attr('href','css/colour_4.css');
								jQuery("#logo").attr("src","images/c4.html");
			} else if(myClass == 'c5'){
		jQuery('#color').attr('href','css/colour_5.css');
								jQuery("#logo").attr("src","images/c5.html");
			} else if(myClass == 'c6'){
		jQuery('#color').attr('href','css/colour_6.css');
		jQuery("#logo").attr("src","images/c6.html");
			} else if(myClass == 'c7'){
		jQuery('#color').attr('href','css/colour_7.css');
		jQuery("#logo").attr("src","images/c7.html");
			} else if(myClass == 'c8'){
		jQuery('#color').attr('href','css/colour_8.css');
								jQuery("#logo").attr("src","images/c8.html");
			} else if(myClass == 'c9'){
		jQuery('#color').attr('href','css/colour_9.css');
								jQuery("#logo").attr("src","images/c9.html");
			} else if(myClass == 'c10'){
		jQuery('#color').attr('href','css/colour_10.css');
								jQuery("#logo").attr("src","images/c10.html");
			} else if(myClass == 'c11'){
		jQuery('#color').attr('href','css/colour_11.css');
								jQuery("#logo").attr("src","images/c11.html");
			
			} else if(myClass == 'c12'){
		jQuery('#color').attr('href','css/colour_12.css');
								jQuery("#logo").attr("src","images/c12.html");
			
			} else if(myClass == 'c13'){
		jQuery('#color').attr('href','css/colour_13.css');
								jQuery("#logo").attr("src","images/c13.html");
			 
			} else if(myClass == 'c14'){
		jQuery('#color').attr('href','css/colour_14.css');
								jQuery("#logo").attr("src","images/c14.html");
			 
			} else if(myClass == 'c15'){
		jQuery('#color').attr('href','css/colour_15.css');
								jQuery("#logo").attr("src","images/c15.html");
			 
			} else if(myClass == 'c16'){
		jQuery('#color').attr('href','css/colour_16.css');
								jQuery("#logo").attr("src","images/c16.html");
			
			} else if(myClass == 'c17'){
		jQuery('#color').attr('href','css/colour_17.css');
								jQuery("#logo").attr("src","images/c17.html");
			
			} else if(myClass == 'c18'){
		jQuery('#color').attr('href','css/colour_18.css');
								jQuery("#logo").attr("src","images/c18.html");
		
			} else if(myClass == 'c19'){
		jQuery('#color').attr('href','css/colour_19.css');
								jQuery("#logo").attr("src","images/c19.html");
			} 
			else if(myClass == 'c21'){
		jQuery('#color').attr('href','css/colour_21.css');
								jQuery("#logo").attr("src","images/c21.html");
			} 
			else if(myClass == 'c22'){
		jQuery('#color').attr('href','css/colour_22.css');
								jQuery("#logo").attr("src","images/c22.html");
			} 
			
	});
	// Heading  Font and CSS Changes 
	
	jQuery('#cfont').change(function(){
		var fontName = jQuery('#cfont').val();
		if(fontName == 'default'){
			jQuery('#customFont').attr('href','css/typography.css');
		}else if(fontName == 'cardo'){
			jQuery('#customFont').attr('href','css/cardo.html');
			} else if(fontName == 'IMFell'){
			jQuery('#customFont').attr('href','css/IMFell.html');
		} else if(fontName == 'Josefin'){
			jQuery('#customFont').attr('href','css/Josefin.html');
		}  else if(fontName == 'OpenSansCondensed'){
			jQuery('#customFont').attr('href','css/OpenSansCondensed.html');
		}   else if(fontName == 'OpenSans'){
			jQuery('#customFont').attr('href','css/OpenSans.html');
		} else if(fontName == 'Vollkorn'){
			jQuery('#customFont').attr('href','css/Vollkorn.html');
		} else if(fontName == 'DroidSans'){
			jQuery('#customFont').attr('href','css/DroidSans.html');
		}
		else if(fontName == 'cabin'){
			jQuery('#customFont').attr('href','css/cabin.html');
		}else {
			jQuery('#customFont').attr('href','css/typography.css');
		}
	});
	
	
// Content Font and CSS Changes 
	jQuery('.open-buttton1').click(function(){
	
		if(jQuery('.open-buttton1').hasClass('closed')){
			jQuery(this).parent('.settings-panel1').stop().animate({left:225},400);
			jQuery(this).removeClass('closed').addClass('opened');
		} else {
			jQuery(this).parent('.settings-panel1').stop().animate({left:0},400);
			jQuery(this).removeClass('opened').addClass('closed');
		}
	});
	
	});
	
jQuery('.settings-panel1 .bg_patterns ul li').click(function(){
		var thisBGimg = jQuery(this).css('background-image');
		jQuery('body').css('background-image', thisBGimg);
	});


// Card Pattern changes  Patterns and Background Colour 
	
	jQuery('.settings-panel1 .card_patterns ul li').click(function(){
		var thisBGcol = jQuery(this).css('background-color');
		var thisBGimg = jQuery(this).css('background-image');
		jQuery('.card-pattern').css('background-image', thisBGimg);
		jQuery('.card-pattern').css('background-color', thisBGcol);
	});
	
		 jQuery("ul.c_patterns li").click(function () {
			 var myClass = jQuery(this).attr("class");
			if(myClass == 'default'){
			jQuery('#color').attr('href','css/style.css');
					jQuery("#logo").attr("src","images/logo.html");
		}else if(myClass == 'c1'){
		jQuery('#color').attr('href','css/colour_1.css');
		jQuery("#logo").attr("src","images/c1.html");
			} else if(myClass == 'c2'){
		jQuery('#color').attr('href','css/colour_2.css');
				jQuery("#logo").attr("src","images/c2.html");
			} else if(myClass == 'c3'){
		jQuery('#color').attr('href','css/colour_3.css');
						jQuery("#logo").attr("src","images/c3.html");
			} else if(myClass == 'c4'){
		jQuery('#color').attr('href','css/colour_4.css');
								jQuery("#logo").attr("src","images/c4.html");
			} else if(myClass == 'c5'){
		jQuery('#color').attr('href','css/colour_5.css');
								jQuery("#logo").attr("src","images/c5.html");
			} else if(myClass == 'c6'){
		jQuery('#color').attr('href','css/colour_6.css');
		jQuery("#logo").attr("src","images/c6.html");
			} else if(myClass == 'c7'){
		jQuery('#color').attr('href','css/colour_7.css');
		jQuery("#logo").attr("src","images/c7.html");
			} else if(myClass == 'c8'){
		jQuery('#color').attr('href','css/colour_8.css');
								jQuery("#logo").attr("src","images/c8.html");
			} else if(myClass == 'c9'){
		jQuery('#color').attr('href','css/colour_9.css');
								jQuery("#logo").attr("src","images/c9.html");
			} else if(myClass == 'c10'){
		jQuery('#color').attr('href','css/colour_10.css');
								jQuery("#logo").attr("src","images/c10.html");
			} else if(myClass == 'c11'){
		jQuery('#color').attr('href','css/colour_11.css');
								jQuery("#logo").attr("src","images/c11.html");
			
			} else if(myClass == 'c12'){
		jQuery('#color').attr('href','css/colour_12.css');
								jQuery("#logo").attr("src","images/c12.html");
			
			} else if(myClass == 'c13'){
		jQuery('#color').attr('href','css/colour_13.css');
								jQuery("#logo").attr("src","images/c13.html");
			 
			} else if(myClass == 'c14'){
		jQuery('#color').attr('href','css/colour_14.css');
								jQuery("#logo").attr("src","images/c14.html");
			 
			} else if(myClass == 'c15'){
		jQuery('#color').attr('href','css/colour_15.css');
								jQuery("#logo").attr("src","images/c15.html");
			 
			} else if(myClass == 'c16'){
		jQuery('#color').attr('href','css/colour_16.css');
								jQuery("#logo").attr("src","images/c16.html");
			
			} else if(myClass == 'c17'){
		jQuery('#color').attr('href','css/colour_17.css');
								jQuery("#logo").attr("src","images/c17.html");
			
			} else if(myClass == 'c18'){
		jQuery('#color').attr('href','css/colour_18.css');
								jQuery("#logo").attr("src","images/c18.html");
		
			} else if(myClass == 'c19'){
		jQuery('#color').attr('href','css/colour_19.css');
								jQuery("#logo").attr("src","images/c19.html");
			} 
			
	});
	
