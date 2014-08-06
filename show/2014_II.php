{embed="___includes/header" page_title="homepage"}
{embed="___includes/2014menu"}


	<script src="/site/javascripts/jquery-ui-1.10.4.custom.min.js"></script>
	<script>
	$(function() {
		// Use expressionengine channel entries to populate arrays for the search box
		var availableTags = [

			//future entries
			{exp:channel:entries channel="submissions" status="Showcase" orderby="edit_date" sort="desc" disable="member_data" limit="600" show_expired="yes"}
   			"{title}",
    		{/exp:channel:entries}

    		//past archive entries
    		{exp:channel:entries channel="archive_submissions" status="Showcase" orderby="edit_date" sort="desc" disable="member_data" limit="600" show_expired="yes"}
   			"{title}",
    		{/exp:channel:entries}

    		//workplaces entries
    		{exp:channel:entries channel="practices" orderby="edit_date" sort="desc" disable="member_data" limit="600" show_expired="yes"}
   			"{title}",
    		{/exp:channel:entries}

    		//members list
			{exp:low_alphabet:entries parse="inward" status="Judges-id7|Members___Founding-id5|Members___Regular-id8" channel="members" orderby="member_surname|member_firstname" alpha_ignore="the|a" numbers="after" group_numbers="yes" numbers_label="#" disable="categories|member_data|pagination" limit="1000"}
	       	"{member_firstname} {member_surname}",
			{/exp:low_alphabet:entries}

		];

		//replace the ampersands
		var val_to_replace = '&amp;';
		var replace_with = '&';
		$.each(availableTags, function (key, val) {
		    // search for value and replace it
		    availableTags[key] = val.replace(val_to_replace, replace_with);
		});

		//replace punctuations
		var val_to_replace_new = "&#8217;"
		var replace_with_new = '’';
		$.each(availableTags, function (key, val) {
		    // search for value and replace it
		    availableTags[key] = val.replace(val_to_replace_new, replace_with_new);
		});
		var val_to_replace_two = "&#8216;"
		var replace_with_two = '’';
		$.each(availableTags, function (key, val) {
		    // search for value and replace it
		    availableTags[key] = val.replace(val_to_replace_two, replace_with_two);
		});

		//jQuery UI — autocomplete
		//use autocomplete on the search box using the available tags array
		$( "#keywords" ).autocomplete({
			source: availableTags
		});


		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>


<div class="container">
	<div id="tabs">
		<ul class="top-nav">
			<li><a href="#tabs-1" class="past-link">Past</a></li>
			<li><a href="#tabs-2" class="present-link">Present</a></li>
			<li><a href="#tabs-3" class="future-link active">Future</a></li>
		</ul>

	<div  class="slider">
	<div id="tabs-1">


		<h2>Selected: Design that helped shape Ireland from 1950—2014</h2>
		<div class="container slider-container" style="padding-top: 15px;">
		<ul class="homepage-project-holder">
			<span class="top-rule"></span>

			<div class="royalSlider visibleNearby rsDefault slider-inner">

			
			<div>
				{exp:channel:entries channel="archive_submissions" status="Showcase" orderby="random" sort="desc" disable="member_data" limit="4" show_expired="yes"}
				<li class="project-homepage-item rsContent">
					<a href="/past/project/{url_title}"><img src="{submission_images limit="1"}{image:250}{/submission_images}" alt="{title}"/></a>
					<a class="project-homepage-link-title" href="/past/project/{url_title}"><h4>{title}</h4></a>
					
				</li>
				{/exp:channel:entries}

			</div>
						<div>
				{exp:channel:entries channel="archive_submissions" offset="4" status="Showcase" orderby="random" sort="desc" disable="member_data" limit="4" show_expired="yes"}
				<li class="project-homepage-item rsContent">
					<a href="/past/project/{url_title}"><img src="{submission_images limit="1"}{image:250}{/submission_images}" alt="{title}"/></a>
					<a class="project-homepage-link-title" href="/past/project/{url_title}"><h4>{title}</h4></a>
					
				</li>
				{/exp:channel:entries}
				
			</div>
			<div>
				{exp:channel:entries channel="archive_submissions" offset="8" status="Showcase" orderby="random" sort="desc" disable="member_data" limit="4" show_expired="yes"}
				<li class="project-homepage-item">
					<a href="/past/project/{url_title}"><img src="{submission_images limit="1"}{image:250}{/submission_images}" alt="{title}"/></a>
					<a class="project-homepage-link-title" href="/past/project/{url_title}"><h4>{title}</h4></a>
					
				</li>
				{/exp:channel:entries}
				
			</div>

			</div>

		</ul>
		<div style="text-align: center; margin-top: -45px; position: relative; display: block; width: 100%;">
			<a class="learn-more wow fadeInUp" style="display: inline-block;" data-wow-delay="2.8s" data-wow-duration="1s" href="/past/">Launch the 100 Past Archives</a>
		</div>
		</div>
	</div>
	<div id="tabs-2">
		<h2>Discussed: Ideas shaping the design community</h2>
		<div class="container" style="padding-top: 15px;">

		<ul class="homepage-project-holder">
			<span class="top-rule"></span>
			{exp:channel:entries channel="news"	orderby="date" sort="desc" disable="member_data|categories" limit="4" show_expired="yes"}

			<li class="project-homepage-item animated fadeIn">
				{news_slideshow limit="1"}
					<a class="rsImg homepg-img" href="/present/entry/{url_title}"><img src="{exp:ce_img:pair src="{url}" width='300' allow_scale_larger="yes" crop="no" add_dims="no"}{made}{/exp:ce_img:pair}" alt="{title}"/></a>
				{/news_slideshow}
				<h4><a href="/present/entry/{url_title}">{title}</a></h4>
			</li>

			{/exp:channel:entries}
		</ul>
		<div style="text-align: center; margin-top: 20px;">
			<a class="learn-more wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s" href="/present/">Read More</a>
		</div>
		</div>
	</div>
	<div id="tabs-3">
		<h2>Submitted: Projects forming the future of Irish Design</h2>
		<div class="container" style="padding-top: 15px;">
		<ul class="homepage-project-holder">
			<span class="top-rule"></span>
			<div class="royalSlider visibleNearby rsDefault slider-inner-2">

			
			<div>
				{exp:channel:entries channel="submissions" status="Showcase" orderby="edit_date" limit="4" sort="desc" disable="member_data" show_expired="yes"}
				
				<li class="project-homepage-item">
					<a href="/future/project/{url_title}"><img src="{submission_images limit="1"}{image:250}{/submission_images}" alt="{title}"/></a>
					<a class="project-homepage-link-title" href="/future/project/{url_title}"><h4>{title}</h4></a>
				</li>
				
				{/exp:channel:entries}

			</div>
						<div>
				{exp:channel:entries channel="submissions" offset="4" status="Showcase" orderby="edit_date" sort="desc" disable="member_data" limit="4" show_expired="yes"}
								
				<li class="project-homepage-item">
					<a href="/future/project/{url_title}"><img src="{submission_images limit="1"}{image:250}{/submission_images}" alt="{title}"/></a>
					<a class="project-homepage-link-title" href="/future/project/{url_title}"><h4>{title}</h4></a>
				</li>

				{/exp:channel:entries}

				
			</div>
									<div>
				{exp:channel:entries channel="submissions" offset="8" status="Showcase" orderby="edit_date" sort="desc" disable="member_data" limit="4" show_expired="yes"}
								
				<li class="project-homepage-item">
					<a href="/future/project/{url_title}"><img src="{submission_images limit="1"}{image:250}{/submission_images}" alt="{title}"/></a>
					<a class="project-homepage-link-title" href="/future/project/{url_title}"><h4>{title}</h4></a>
				</li>
				{/exp:channel:entries}
				
				
			</div>

			</div>

		</ul>
		<div style="text-align: center; margin-top: -45px;">
			<a class="learn-more wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1s" href="/future/">Launch the 100 Future Showcase</a>
		</div>
		</div>
	</div>
</div>
</div>
</div>

<div class="container " style="padding-top: 20px;" >
	<div class="inside numbers"><br>
	<h2 class="active-comm" style="margin-bottom: 45px;"><span style="color:#141414;">Active:</span> A Living Community</h2>

<div class="homepage-number-holder wow fadeInUp" data-wow-delay="0.4s" style="margin-left: 30px;">
	<a class="numbers-link" href="http://www.100archive.com/people"><span class="homepage-number-count number-animation-inmotion" id="total-members-number" style="color: #141414;"></span><br>
	<span>Members</span></a>
</div>

<div class="homepage-number-holder wow fadeInUp" data-wow-delay="0.3s">
	<a class="numbers-link" href="http://www.100archive.com/workplaces"><span class="homepage-number-count" id="total-workplaces-number"></span><br>
	<span>Workplaces</span></a>
</div>

<div class="homepage-number-holder wow fadeInUp" data-wow-delay="0.2s">
	<a class="numbers-link" href="http://www.100archive.com/future"><span class="homepage-number-count" id="total-future-number"></span><br>
	<span>Future Projects</span></a>
</div>

<div class="homepage-number-holder wow fadeInUp" data-wow-delay="0.3s">
	<a class="numbers-link" href="http://www.100archive.com/past"><span class="homepage-number-count" id="total-past-number"></span><br>
	<span>Past Projects</span></a>
</div>

<div class="homepage-number-holder wow fadeInUp" data-wow-delay="0.4s">
		<a class="numbers-link" href="http://www.100archive.com/present"><span class="homepage-number-count" id="total-articles-number"></span><br>
	<span>Articles</span></a>
</div>


<br><br><br>
<div class="row wow fadeInUp" data-wow-offset="70" style="color: #141414; letter-spacing: 0px; font-weight: 300; font-size: 16px; line-height: 1.445; padding-top: 30px">
	<div class="four columns"><strong>Submit</strong> — If you are a practicing designer in Ireland, or an Irish designer living abroad, you are eligible to create a profile and start submitting your projects straight away.<br><br><a class="continue button subscribes" href="http://www.100archive.com/account/subscriptions">Submit</a></div>
	<div class="four columns"><strong>Suggest</strong> — Is there something that you think should be featured in the archive? Mail us your suggestions, or even better, write us a post about it.<br><br><br><a class="continue button donate" href="http://www.100archive.com/present/entry/100-needs-you">Suggest</a></div>
	<div class="four columns"><strong>Volunteer</strong> — 100 needs you! We’re looking for volunteers to help us write, illustrate, research, organise, code and generally keep the site alive with activity. <br><br><br><a class="continue button vol" href="http://www.100archive.com/present/entry/100-needs-you">Volunteer</a></div>
</div>
<div class="row" style="color: #141414; letter-spacing: 0px; font-weight: 300; font-size: 16px; line-height: 1.445;  margin-top: 60px">
		<h2 class="active-comm" style="margin-left: -10px;">Search</h2>
		{exp:search:simple_form channel="archive_submissions|submissions|members|practices" result_page="search/index" no_result_page="search/noresults" status="not incomplete|pending|closed" form_id="homepage-search"}
        <p>
                <input type="text" name="keywords" id="keywords" value="" size="18" maxlength="100" placeholder="Search by title, designer, workplace or type of project...">
                <input type="submit" class="submit" value=" " id="submit-search">
		{/exp:search:simple_form}
		<br><br><br><br><br>
</div>

</div>



</div>


</div>
{embed="___includes/2014footer"}

