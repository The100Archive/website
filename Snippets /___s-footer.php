<footer>
<div class="container bg-footer text-fade pad-top gap-top pad-bottom">
	<div class="row">
		<div class="nine columns offset-by-two">
			<div class="row">
				<div class="three columns ">
					<ul>
						<li><a href="{path="___archive/future"}">Future Archive</a></li>
						<li><a href="{path="___archive/past"}">Past Archive</a></li>
					</ul>
				</div>
				
				<div class="three columns">
					<ul>
						<li><a href="{path="___members"}">Members</a></li>
						<li><a href="{path="___workplaces"}">Workplaces</a></li>
						<li><a href="{path="__login"}">Sign In</a></li>
						<li><a href="{path="___login/register"}">Register</a></li>
					</ul>
				</div>
				
				<div class="three columns">
					<ul>
						<li><a href="{path="___pages/learn-more"}">Learn More</a></li>
						<li><a href="{path="kb"}">Knowledge Base</a></li>
					</ul>
				</div>
				
				<div class="three columns">
					<ul>
						<li><a href="http://twitter.com/100archive"><span class="glyph social">e</span>@100 Archive</a></li>
						<li><a href="{path="___pages/contact"}">Contact</a></li>

					</ul>
				</div>
			</div><!-- row -->	
		</div><!-- eight -->
	</div><!-- Row -->
</div><!-- container -->
</footer>



<!-- Included JS Files -->
{!--<script src="/site/javascripts/jquery.min.js"></script>--}
<script src="/site/javascripts/foundation.js"></script>
<script src="/site/javascripts/app.js"></script>

{if segment_2=="project" OR segment_2=="preview-project" OR segment_2=="review-project"}
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

{if segment_2=="add-project"}
<script src="/site/dropkick/jquery.dropkick-1.0.0.js"></script>
<script type="text/javascript" charset="utf-8">
  $(function () {
    $('.client').dropkick();
    $('.discipline').dropkick();
  });
</script>
{/if}

</body>
</html>