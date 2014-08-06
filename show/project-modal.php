<script src="/site/royalslider/jquery.royalslider.min.js"></script>
<div style="padding-top: 10%;">
{exp:channel:entries channel="submissions" status="Showcase|Archive" limit="1" orderby="title" sort="asc" disable="member_data" show_expired="yes" dynamic="yes"}
<div class="royalSlider rsDefault visibleNearby pad-bottom project-modal" id="slidershow{entry_id}">
<div>
	<div class="container">
	<div class="row">
	<div class="five columns end offset-by-six" style="padding-top: 25%;">
	<p class="text-large">{title}</p>
	<p class="text-grey">{exp:playa:children field="submission_members" status="not closed" backspace="2"}{title}, {/exp:playa:children}	</p>
{categories}
    {if category_id == "4"}
    <p class="text-white text-small"><a target="_blank" href="{submission_url}">{submission_url}</a></p>
    {/if}
{/categories}
	<a href="{title_permalink="show/project/"}" class="button black hover-purple" target="_blank">Details</a>
	
	</div>
	</div>
	</div>
</div>
{submission_images}
	<a class="rsImg" href="{image:1000}"></a>
{/submission_images}
{if submission_video}
    <a class="rsImg" href="{exp:ce_img:pair src="{submission_images limit="1"}{image}{/submission_images}" allow_scale_larger="yes" width="1000" height="600" crop="yes" filter="gaussian_blur,20"}{made}{/exp:ce_img:pair}" data-rsVideo="{submission_video}"></a>
{/if}
</div>
</div>
<a class="close-reveal-modal no_ul text-xlarge" id="sliderclose{entry_id}">&#215;</a>

<script>
	jQuery(document).ready(function($) {
	$("#sliderclose{entry_id}").click(function(){
	  $("#slidershow{entry_id}").hide();
	});
});
</script>
{/exp:channel:entries}


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
	      breakpoint: 850,
	      breakpointCenterArea: 0.60,
	      navigateByCenterClick: true
	    }
})
});
</script>

