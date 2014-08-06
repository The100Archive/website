{embed="___includes/header"}
{embed="___includes/2014menu" }

<div id="futuregrid">
{exp:channel:entries channel="submissions" limit="12" status="Showcase|Archive" orderby="edit_date" sort="desc" disable="member_data" show_expired="yes"}
<a style="display: none;"><img src="{submission_images limit="1"}{image:1000}{/submission_images}"></a>
{/exp:channel:entries}
</div>
<div class="futuregrid-cover">
</div>

<div class="container">

<!--—————— Text ——————-->
<div class="row home-top">

<div class="eight columns centered text-center">
<img src="/site/images/100DesignArchive-logo-medium-white.png" alt="Site Menu"></a>
<h1>Ireland’s national graphic design archive</h1>
</div>

</div><!-- Row -->

<!--
<div class="row">
<div class="ten columns centered text-center">
<div class="four columns">
	<h1>100 Future</h1>
	<p class="text-medium text-dark">The ongoing feed of work submitted by our members.</p>
</div>
<div class="four columns">
	<h1>100 Now</h1>
	<p class="text-medium">Updates and news from the 100 Archive team and members.</p>
</div>
<div class="four columns">
	<h1>100 Past</h1>
	<p class="text-medium">The annual selection of 100 projects.</p>
</div>
</div>
</div>
-->
<div class="row gap-bottom">
<div class="ten columns centered">
<div class="row">
{exp:channel:entries channel="news" limit="3"}
	<div class="four columns end">
		<p><a href="{title_permalink="now/entry"}" class="no_ul">{title}</a></p>
		<div class="text-medium text-white pad-bottom blog-text">
		{if news_text:has_excerpt}
		{news_text:excerpt}
		<a href="{url_title_path="now/entry"}" class="text-small">Continue Reading &rarr;</a>
		{if:else}
		{exp:trunchtml chars="300" inline=" ..."  ending="<a href='{url_title_path="now/entry"}'  class='text-small'>Continue Reading &rarr;</a>"}{news_text}{/exp:trunchtml} 
		{/if}
		
		
			{!--{if last_segment!="now"}
			<p class="text-fade pad-top"><i>What do you think? Let us know on <a href="https://twitter.com/100archive" target="_blank">Twitter</a> or <a href="https://www.facebook.com/100designarchive" target="_blank">Facebook</a></i></p>
			{/if}--}
		</div>
	</div>
{/exp:channel:entries}
</div>
</div>
</div>

<div class="row pad-top-xl gap-bottom">

<div class="flex-video widescreen vimeo">
<iframe src="http://player.vimeo.com/video/63331575" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
</div>

<div class="row pad-bottom-xl">
<div class="five columns offset-by-two">
<p>If you are a practicing designer in Ireland, or an Irish designer living abroad, you are eligible to create a profile and start submitting your projects straight away.</p>
</div>

<div class="three columns end">
<p class="text-center"><a href="{path="learn"}">Learn More</a> or</p>
<a href="{path="signin/join"}" class="xlarge button black hover-orange">Join Now</a>
</div>

</div>

</div>
</div>


</div>
{embed="___includes/2014footer"}
