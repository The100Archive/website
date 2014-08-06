<footer>
<div class="container bg-footer text-fade pad-top pad-bottom {if segment_2=="archive-review" OR segment_2=="archive-shortlist" OR segment_2=="archive-comment" OR segment_2=="archive-review-complete" OR segment_2=="archive-rank"}bg-dark{/if}">
		<div class="row pad-top">
			<div class="nine columns pad-top offset-by-two">
				<div class="row">
					<div class="eleven columns">
						<ul class="block-grid four-up mobile">
						<li>
								<ul>
									<li class="link-purple"><a href="{path="show/future"}">100 Future</a></li>
									<li class="link-orange"><a href="{path="now"}">100 Now</a></li>
									<li class="link-blue"><a href="" data-reveal-id="100past" data-animation="fade" data-animationspeed="300">100 Past</a></li>
								</ul>
						</li>
						<li>
								<ul>
									<li class="link-orange"><a href="{path="people"}">People</a></li>
									<li class="link-orange"><a href="{path="workplaces"}">Workplaces</a></li>
									<li class="link-orange"><a href="{path="signin"}">Sign In</a></li>
									<li class="link-orange"><a href="{path="signin/join"}">Join</a></li>
								</ul>
						</li>
						<li>
								<ul>
									<li class="link-red"><a href="{path="learn"}">Learn More</a></li>
									<li class="link-red"><a href="{path="learn/kb"}">Knowledge Base</a></li>
									<li class="link-orange"><a href="{path="people/team"}">Team</a></li>
									
								</ul>
						</li>
						<li>
								<ul>
									<li><a href="http://twitter.com/100archive" target="_blank"><span class="glyph social">e</span></a> <a href="https://www.facebook.com/100designarchive" target="_blank"><span class="glyph social">d</span></a></li>
									<li><!-- // MAILCHIMP SUBSCRIBE CODE \\ -->
									<a href="http://eepurl.com/xDj_f" target="_blank">Newsletter &rarr;</a>
									<!-- \\ MAILCHIMP SUBSCRIBE LINK // --></li>
								</ul>
						</li>
					</div><!-- row -->	
				</div><!-- row -->	
			</div><!-- row -->	
		</div><!-- eight -->
	</div><!-- Row -->
</div><!-- container -->
</footer>

<div id="100past" class="reveal-modal bg-dark large">
	<h2 class="text-blue">100 Past</h2>
	<p>The 100 Past is still in preparation. <a href="{path="learn/kb/past"}">Learn more about how it will work</a>, or read the <a href="{path="pages/curatorial-statement"}">Curatorial Statement</a>, prepared by the expert panel who are undertaking the task of collating the historical archive.
	</p>
	<a class="close-reveal-modal no_ul">&#215;</a>
</div>

<div id="project-loader" class="reveal-modal bg-none">
	<p class="text-center text-white"><br />
	<img src="/site/images/project-loader.gif" alt="loading" width="110px" height="110px">
	<br /><br />
	Uploading<br /></p>
	<p class="text-small text-center text-green">Please be patient while your work uploads. <br />Do not refresh the page, navigate to another page<br /> or press the back button.</p>
</div>

<div id="showvid" class="reveal-modal bg-none xlarge">
<div class="container">
<div class="row">
<div class="flex-video widescreen vimeo">
<iframe src="http://player.vimeo.com/video/63331575" width="500" height="281" frameborder="0" id="myVideo" style="display:none;" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
</div>
</div>
	<a class="close-reveal-modal no_ul">&#215;</a>
</div>

<script type="text/javascript">
$(window).load(function(){
    $(function(){
    var $revealModal = 
        $("#showvid"),
        $myVideo = $("#myVideo");
         // Bind to the reveal opening event
         $revealModal.bind("reveal:open",function(){
            // It's opening
            $myVideo.show();
        })
        // Bind to the reveal closing event
      .bind("reveal:close",function(){
            // It's closing
            $myVideo.hide();
            // sets the source to nothing, stopping the video
            $('iframe#myVideo').attr('src',''); 
            // sets it back to the correct link so that it reloads immediately on the next window open
            $('iframe#myVideo').attr('src','http://player.vimeo.com/video/63331575');
          })
          // Fire reveal object.
          $('.triggerModual').click(function() {
            $revealModal.reveal();
        });
    });
});</script>


<!-- Included JS Files -->
{!--<script src="/site/javascripts/jquery.min.js"></script>--}
<script src="/site/javascripts/foundation.js"></script>
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
	    autoScaleSliderHeight: 300,
	    loop: true,
	    fadeinLoadedSlide: false,
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
{/if}

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
</script>

{/if}

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
</script>
{/if}


{if segment_2=="add-project"}
<script src="/site/dropkick/jquery.dropkick-1.0.0.js"></script>
<script type="text/javascript" charset="utf-8">
  $(function () {
    $('.client').dropkick({
        change: function (value, label) {
		  $('#category_client').val(value);
        }
      });
    $('.discipline').dropkick({
        change: function (value, label) {
		  $('#category_discipline').val(value);
        }
      });

     /*$('#publishForm button.button').click(function(e) {
          e.preventDefault();
          $('#publishForm').submit();
	  $('#project-loader').reveal({animation: 'fadeAndPop', animationspeed: 300});
     });*/

  });
</script>
{/if}
<script type="text/javascript" charset="utf-8">
  $(function () {
$('#show-home').click( function() {$('#home').fadeIn('fast');return false;});
$('#show-home').click( function() {$('#cover').fadeIn('fast');return false;});
$('.hide-home').click( function() {$('#home').fadeOut('slow');return false;});
$('.hide-home').click( function() {$('#cover').fadeOut('slow');return false;});
  });
</script>
<script type="text/javascript" src="http://include.reinvigorate.net/re_.js"></script>
<script type="text/javascript">
try {
reinvigorate.track("08k1e-097u069bwe");
} catch(err) {}
</script>
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
      activator: "#Intercom",
      use_counter: true
    },
	'app_id': "e83e95fedd931d2be0740104d3bb598a58f0db27"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://api.intercom.io/api/js/library.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}};})()</script>
{/if}







</body>
</html>