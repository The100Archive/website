	</div> <!-- WRAP -->

<!-- Past Popup -->
<div id="100past" class="reveal-modal bg-dark large">
	<h2 class="text-blue">100 Past</h2>
	<p>The 100 Past is still in preparation. <a href="{path="learn/kb/past"}">Learn more about how it will work</a>, or read the <a href="{path="pages/curatorial-statement"}">Curatorial Statement</a>, prepared by the expert panel who are undertaking the task of collating the historical archive.
	</p>
	<a class="close-reveal-modal no_ul">&#215;</a>
</div>

<!-- Included JS Files -->
<script src="/site/javascripts/foundation.js"></script>
<script src="/site/javascripts/isotope.pkgd.min.js"></script>
<script src="/site/javascripts/app.js"></script>
<script src="/site/javascripts/jquery.smartresize.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
	var squarewidth = ($(".square").width())*.98;
	var squaregapheight = ($(".square").width())*.45;
	$(function() {
	  $(".square").height(squarewidth);
	  $(".squaregap").height(squaregapheight);
	});
	});
	
	$(window).smartresize(function(){
	var squarewidth = ($(".square").width())*.98;
	var squaregapheight = ($(".square").width())*.45;
	$(function() {
	  $(".square").height(squarewidth);
	  $(".squaregap").height(squaregapheight);
	});
	});
	</script>
<!--<script src="/site/javascripts/jquery.smartresize.js"></script>-->
<!-- <script src="/site/javascripts/jquery.justifiedGallery.min.js"></script> -->

<!-- Future Grid (Homepage)

<script>
	$(document).ready(function () {
		$("#futuregrid").justifiedGallery({
		randomize : true,
		margins: 0,
		rowHeight: 250,
		fixedHeight: true
		});
	});
</script> -->


<!-- Menus -->

<script>
$(document).ready(function(){
  $("#menu-l-show").click(function(){
    $("body").toggleClass("l-active");
    return false
  });
});
$(document).ready(function(){
  $("#menu-r-show").click(function(){
    $("body").toggleClass("r-active");
     return false
  });
});

$(document).ready(function(){
  $(".l-active #wrap").click(function(){
    $("body").toggleClass("r-active");
     return false
  });
});

</script>


<!-- Square -->
	<script type="text/javascript">
	$(document).ready(function(){
	var squarewidth = ($(".square").width())*.98;
	var squaregapheight = ($(".square").width())*.45;
	$(function() {
	  $(".square").height(squarewidth);
	  $(".squaregap").height(squaregapheight);
	});
	});

	//$(window).smartresize(function(){
	//var squarewidth = ($(".square").width())*.98;
	//var squaregapheight = ($(".square").width())*.45;
	//$(function() {
	//  $(".square").height(squarewidth);
	//  $(".squaregap").height(squaregapheight);
	//});
	//});
	</script>



<!-- Review Slider -->
{if segment_2=="project" OR segment_2=="preview-project" OR segment_2=="review-project" OR segment_2=="archive-review" OR segment_2=="archive-shortlist"}
<script src="/site/royalslider/jquery.royalslider.min.js"></script>
<script>
	jQuery(document).ready(function($) {
	  $('.royalSlider').royalSlider({
	    addActiveClass: true,
	    arrowsNav: false,
	    controlNavigation: 'none',
	    autoScaleSlider: true, 
	    autoScaleSliderWidth: 800,     
	    autoScaleSliderHeight: 400,
	    loop: true,
	    fadeinLoadedSlide: true,
	    globalCaption: false,
	    keyboardNavEnabled: true,
	    globalCaptionInside: false,
	    visibleNearby: {
	      enabled: true,
	      centerArea: 0.6,
	      center: true,
	      breakpoint: 650,
	      breakpointCenterArea: 0.60,
	      navigateByCenterClick: true
	    }
})
});
</script>
<style>
.rsContainer {
	overflow: hidden;
}
</style>{/if}


<script src="/site/royalslider/jquery.royalslider.min.js"></script>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
$(function() { $( "#tabs" ).tabs({show: 'fade', hide: 'fade', active: '0'}); });
</script>

<script>

	  jQuery(document).ready(function($) {

	 

	  $('.slider-inner').royalSlider({
	    addActiveClass: true,
	    arrowsNav: true,
	    autoScaleSliderWidth: 1280,
	    autoScaleSliderHeight: 300,
	    autoScaleSlider: true, 
	    controlNavigation: 'none',
	    loop: true,
	    arrowsNavAutoHide: false,
	    autoScaleSlider: false, 
	    transitionType: 'move',
	    fadeinLoadedSlide: false,
	    globalCaption: false,
	    keyboardNavEnabled: false,
	    globalCaptionInside: false,
	    sliderDrag: false,
	    controlsInside: false,
	    visibleNearby: {
	      enabled: true,
	      centerArea: 1,
	      center: true,
	      breakpoint: 650,
	      breakpointCenterArea: 0.60,
	    }
	})

	  $('.slider-inner-2').royalSlider({
	    addActiveClass: true,
	    arrowsNav: true,
	    autoScaleSliderWidth: 1280,
	    autoScaleSliderHeight: 300,
	    autoScaleSlider: true, 
	    controlNavigation: 'none',
	    loop: true,
	    arrowsNavAutoHide: false,
	    autoScaleSlider: false, 
	    transitionType: 'move',
	    fadeinLoadedSlide: false,
	    globalCaption: false,
	    keyboardNavEnabled: false,
	    globalCaptionInside: false,
	    sliderDrag: false,
	    slidesSpacing: 1280,
	    controlsInside: false,
	    visibleNearby: {
	      enabled: true,
	      centerArea: 1,
	      center: true,
	      breakpoint: 650,
	      breakpointCenterArea: 0.60,
	    }
	})



});

	jQuery(document).ready(function($) {
		$('.slider-inner-2 .rsVisibleNearbyWrap').css('width', '1280px');
		$('.slider-inner-2 .rsOverflow').css('width', '1280px').css('margin-left', '0px');
		$('.slider-inner-2 .rsContainer div:nth-child(2)').css('left', '1240px');
	});

	jQuery(document).ready(function($) {
		$('.slider-inner .rsVisibleNearbyWrap').css('width', '1280px');
		$('.slider-inner .rsOverflow').css('width', '1280px').css('margin-left', '0px');
		$('.slider-inner .rsContainer div:nth-child(2)').css('left', '1240px');
	});





	jQuery(document).ready(function() {


	$("head").append('<style type="text/css"></style>');
	var new_stylesheet = $("head").children(':last');
	setTimeout(function() {
		new_stylesheet.html('.third-number-animation {-webkit-filter: blur(1.6px) !important; opacity: 0.5 !important; 		text-shadow: 0px -8px 2px rgba(0,0,0,0.4), 		0px -15px 2px rgba(0,0,0,0.4), 		0px 8px 2px rgba(0,0,0,0.4), 	0px 15px 2px rgba(0,0,0,0.4) !important}	 .second-number-animation {-webkit-filter: blur(1px) !important; opacity: 0.8 !important; 		text-shadow: 0px -5px 1px rgba(0,0,0,0.2), 		0px -2px 1px rgba(0,0,0,0.2), 		0px 5px 1px rgba(0,0,0,0.2), 	0px 2px 1px rgba(0,0,0,0.2) !important}');
	}, 1000)

	setTimeout(function() {
		new_stylesheet.html('.third-number-animation {-webkit-filter: blur(1.3px) !important; opacity: 0.6 !important; 	text-shadow: 0px -6px 1.5px rgba(0,0,0,0.3), 	0px -12px 1.5px rgba(0,0,0,0.5), 	0px 6px 1.5px rgba(0,0,0,0.3), 	0px 12px 1.5px rgba(0,0,0,0.5) !important;}		 .second-number-animation {-webkit-filter: blur(0.5px) !important; opacity: 0.9 !important; 	    text-shadow: 0px -2px 0.5px rgba(0,0,0,0.1), 	0px -1px 0.5px rgba(0,0,0,0.1), 	0px 2px 0.5px rgba(0,0,0,0.1), 	0px 1px 0.5px rgba(0,0,0,0.1) !important}');
	}, 1333)

	setTimeout(function() {
		new_stylesheet.html('.third-number-animation {-webkit-filter: blur(1px) !important; opacity: 0.7 !important; 		text-shadow: 0px -4px 1px rgba(0,0,0,0.2), 		0px -8px 1px rgba(0,0,0,0.3), 		0px 4px 1px rgba(0,0,0,0.2), 	0px 8px 1px rgba(0,0,0,0.3) !important} 	 .second-number-animation {-webkit-filter: blur(0px) !important; opacity: 1 !important; 		    text-shadow: 0px -0px 0px rgba(0,0,0,0.0), 		0px 0px 0px rgba(0,0,0,0), 		0px 0px 0px rgba(0,0,0,0), 		0px 0px 0px rgba(0,0,0,0) !important}');
	}, 1666)

	setTimeout(function() {
		new_stylesheet.html('.third-number-animation {-webkit-filter: blur(0.6px) !important; opacity: 0.8 !important; 	text-shadow: 0px -2px 0.5px rgba(0,0,0,0.1), 	0px -4px 0.5px rgba(0,0,0,0.2),		0px 2px 0.5px rgba(0,0,0,0.1), 	0px 4px 0.5px rgba(0,0,0,0.2) !important} 		 .second-number-animation {-webkit-filter: blur(0px) !important; opacity: 1 !important; 		    text-shadow: 0px -0px 0px rgba(0,0,0,0.0), 		0px 0px 0px rgba(0,0,0,0), 		0px 0px 0px rgba(0,0,0,0), 		0px 0px 0px rgba(0,0,0,0) !important}');
	}, 1999)

	setTimeout(function() {
		new_stylesheet.html('.third-number-animation {-webkit-filter: blur(0px) !important; opacity: 1 !important;			text-shadow: 0px 0px 0px rgba(0,0,0,0), 	0px 0px 0px rgba(0,0,0,0),		0px 0px 0px rgba(0,0,0,0), 	0px 0px 0px rgba(0,0,0,0) !important} 					 .second-number-animation {-webkit-filter: blur(0px) !important; opacity: 1 !important; 		    text-shadow: 0px -0px 0px rgba(0,0,0,0.0), 		0px 0px 0px rgba(0,0,0,0), 		0px 0px 0px rgba(0,0,0,0), 		0px 0px 0px rgba(0,0,0,0) !important}');
	}, 2333)


	
});



</script>
<style>
.third-number-animation {
	text-shadow:
				 0px -10px 2px rgba(0,0,0,0.2),
				 0px -10px 3px rgba(0,0,0,0.3),
				 0px 10px 2px rgba(0,0,0,0.2),
				 0px 10px 3px rgba(0,0,0,0.3);
	opacity: 0.3;
	-webkit-filter: blur(2px);
	-webkit-transition: text-shadow 200ms ease; /* For Safari 3.1 to 6.0 */
    transition: text-shadow 200ms ease;
}

.second-number-animation {
	text-shadow:
				 0px -7px 1px rgba(0,0,0,0.1),
				 0px -5px 2px rgba(0,0,0,0.2),
				 0px 7px 1px rgba(0,0,0,0.1),
				 0px 5px 2px rgba(0,0,0,0.2);
	opacity: 0.7;
	-webkit-filter: blur(2px);
	-webkit-transition: text-shadow 200ms ease; /* For Safari 3.1 to 6.0 */
    transition: text-shadow 200ms ease;
}
</style>


	{if segment_2=="project"}

	<script>
	jQuery(document).ready(function($) {
		$('.rsContainer').css('overflow','inherit');

		});
	</script>
	{/if}
<!-- Blog Slider -->
{if segment_1=="now"}

<script src="/site/royalslider/jquery.royalslider.min.js"></script>
<script>
      jQuery(document).ready(function($) {
  $('.newsslider').royalSlider({
arrowsNav: true,
loop: true,
keyboardNavEnabled: true,
controlsInside: true,
arrowsNavAutoHide: false,
autoScaleSlider: true, 
autoScaleSliderWidth: 1000,     
autoScaleSliderHeight: 600,
controlNavigation: 'bullets',
navigateByClick: true,
transitionType:'fade'
  });
  $('.newsslider_single').royalSlider({
arrowsNav: true,
loop: true,
keyboardNavEnabled: true,
controlsInside: true,
arrowsNavAutoHide: false,
autoScaleSlider: true, 
autoScaleSliderWidth: 1000,     
autoScaleSliderHeight: 600,
controlNavigation: 'none',
navigateByClick: true,
transitionType:'fade'
     });
});
</script>{/if}

<script>
      jQuery(document).ready(function($) {
		var $container = $('#archive-container');	// init
			$container.isotope({
			  // options
			  itemSelector: '.item',
			  layoutMode: 'fitRows',
			  containerStyle: null,
			});

		if ($('.ui-helper-hidden-accessible').text != '' && $('#keywords').text == '') {
			$('.ui-helper-hidden-accessible').append('Press Enter to Submit')
		} 
		 $('#filters').change( function() {
   			 $container.isotope({
     		 filter: this.value
   			 });
   			  $(this).css("width", "auto").css('color','#646464');
   			 $('#clientContext-filter, #disciplineDropdown-filter, #workplace-filter').prop('selectedIndex',0);
   			 $('#clientContext-filter, #disciplineDropdown-filter, #workplace-filter').css('width', '120px').css('background-image', 'none').css('color','#646464');

   		 });
		 $('#clientContext-filter').change( function() {
   			 $container.isotope({
     		 filter: this.value
   			 });
   			 $(this).css("width", "auto").css('color','#646464');;
   			 $('#filters, #disciplineDropdown-filter, #workplace-filter').prop('selectedIndex',0);
   			 $('#filters, #disciplineDropdown-filter, #workplace-filter').css('width', '120px').css('background-image', 'none').css('color','#646464');
   		 });
 		 $('#disciplineDropdown-filter').change( function() {
   			 $container.isotope({
     		 filter: this.value
   			 });
   			 $(this).css("width", "auto").css('color','#646464');;
   			 $('#clientContext-filter, #filters, #workplace-filter').prop('selectedIndex',0);
   			  $('#clientContext-filter, #filters, #workplace-filter').css('width', '120px').css('background-image', 'none').css('color','#646464');
   		 });
		 $('#workplace-filter').change( function() {
   			 $container.isotope({
     		 filter: this.value
   			 });
   			 $(this).css("width", "auto").css('color','#646464');;
   			 $('#filters, #clientContext-filter, #disciplineDropdown-filter').prop('selectedIndex',0);
   			 $('#filters, #clientContext-filter, #disciplineDropdown-filter').css('width', '120px').css('background-image', 'none').css('color','#646464');
   		 });


		 if ($(window).width() < 1340) {
		 	$('#tabs-1 > div > ul > div > div.rsVisibleNearbyWrap > div').css('max-width','1170px');
		 	$('#tabs-1 > div > ul > div > div.rsVisibleNearbyWrap').css('max-width','1170px');

		 //	alert('small device screen');
		 } else {
		 	//alert('device screen');
		 }

   


		});

</script>

<!-- Learn Slider -->
{if segment_1=="learn"}
<script src="/site/royalslider/jquery.royalslider.min.js"></script>
<script>
      jQuery(document).ready(function($) {
  $('#learnmorestory').royalSlider({
    arrowsNav: true,
    loop: true,
    keyboardNavEnabled: true,
    controlsInside: true,
    arrowsNavAutoHide: false,
    autoScaleSlider: false, 
    autoScaleSliderWidth: 900,     
    autoScaleSliderHeight: 450,
    controlNavigation: 'bullets',
    navigateByClick: true,
    transitionType:'fade'
  });
});
    </script>
{/if}

<!-- Institution Slider -->
{if segment_1=="institution"}
<script src="/site/royalslider/jquery.royalslider.min.js"></script>
<script>
	jQuery(document).ready(function($) {
	  $('.royalSlider').royalSlider({
	    autoPlay: {
	        		// autoplay options go gere
	        		enabled: true,
	        		pauseOnHover: true,
	        		delay: 3000,
	        	},
	    addActiveClass: true,
	    arrowsNav: false,
	    controlNavigation: 'none',
	    autoScaleSlider: true, 
	    autoScaleSliderWidth: 800,     
	    autoScaleSliderHeight: 300,
	    loop: true,
	    fadeinLoadedSlide: false,
	    globalCaption: false,
	    keyboardNavEnabled: true,
	    globalCaption:true,
	    globalCaptionInside: false,
	    visibleNearby: {
	      enabled: true,
	      centerArea: 0.6,
	      center: true,
	      breakpoint: 650,
	      breakpointCenterArea: 0.60,
	      navigateByCenterClick: true
	    }
})
});
</script>{/if}

<!-- Submission Form JS -->
{if segment_2=="add-project"}
<script src="/site/dropkick/jquery.dropkick-1.0.0.js"></script>
<script type="text/javascript" charset="utf-8">
  $(function () {
    $('.client').dropkick({
        change: function (value, label) {
		  $('#category_client').val(value);1
        }
      });
    $('.discipline').dropkick({
        change: function (value, label) {
		  $('#category_discipline').val(value);
        }
      });
  });
</script>
{/if}

<!-- Overlay show/hide 
<script type="text/javascript" charset="utf-8">
  $(function () {
$('#show-home').click( function() {$('#home').fadeIn('fast');return false;});
$('#show-home').click( function() {$('#cover').fadeIn('fast');return false;});
$('.hide-home').click( function() {$('#home').fadeOut('slow');return false;});
$('.hide-home').click( function() {$('#cover').fadeOut('slow');return false;});
  });
</script>-->


<!-- Analytics -->
<script type="text/javascript" src="http://include.reinvigorate.net/re_.js"></script>
<script type="text/javascript">
try {
reinvigorate.track("08k1e-097u069bwe");
} catch(err) {}
</script>

<script src="/site/javascripts/wow.min.js"></script>

<!-- Homepage Ticker Counters-->
{if segment_2=="" || segment_2 == "2014_II"}
<script src="/site/javascripts/countUp.min.js"></script>
<script>
 new WOW().init();
 //Members Number Animation
 var numAnim = new countUp("total-members-number", 0, {exp:stats channel='members'}{total_entries}{/exp:stats}, 0, 3);
 numAnim.start();

//Workplaces Number Animation
 var numAnim = new countUp("total-workplaces-number", 0, {exp:stats channel="practices"}{total_entries}{/exp:stats}, 0, 3);
 numAnim.start();

//Future Projects Number Animation
 var numAnim = new countUp("total-future-number", 0, {exp:stats channel="submissions"}{total_entries}{/exp:stats}, 0, 3);
 numAnim.start();

//Past Projects Number Animation
 var numAnim = new countUp("total-past-number", 0, {exp:stats channel="archive_submissions"}{total_entries}{/exp:stats}, 0, 3);
 numAnim.start();

//Articles Number Animation
 var numAnim = new countUp("total-articles-number", 0, {exp:stats channel="news"}{total_entries}{/exp:stats}, 0, 3);
 numAnim.start();

</script>
{/if}

<!-- Intercom -->
{if logged_in}
<script id="IntercomSettingsScriptTag">
  window.intercomSettings = {
    email: "{username}",{exp:channel:entries dynamic="no" channel="members" status="not closed" limit="1" author_id="{zoo_member_id}" }
    created_at: {entry_date},
    name: "{member_firstname} {member_surname}",
    'group': "{group_title}",
    'mailchimp':"{member_newsletter}",{/exp:channel:entries}
    'submissions':{exp:tidy_credits:submissions member_id="{zoo_member_id}"},
    'subscription days left':{exp:tidy_credits:subscription member_id="{zoo_member_id}"},
    'credits left':{exp:tidy_credits:credits_available member_id="{zoo_member_id}"},
    'can submit':"{exp:tidy_credits member_id="{zoo_member_id}"}",
    widget: {
    "activator": "#IntercomDefaultWidget"
    },
	'app_id': "e83e95fedd931d2be0740104d3bb598a58f0db27"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://api.intercom.io/api/js/library.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}};})()</script>
{/if}


</body>
</html>