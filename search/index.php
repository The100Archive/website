{embed="___includes/header"}
{embed="___includes/2014menu" }
	<link href="css/ui-lightness/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
<script>
	$(function() {
		
		var availableTags = [
			{exp:channel:entries channel="submissions" status="Showcase" orderby="edit_date" sort="desc" disable="member_data" limit="600" show_expired="yes"}
   			"{title}",
    		{/exp:channel:entries}


    		{exp:channel:entries channel="practices" orderby="edit_date" sort="desc" disable="member_data" limit="600" show_expired="yes"}
   			"{title}",
    		{/exp:channel:entries}

			{exp:low_alphabet:entries parse="inward" status="Judges-id7|Members___Founding-id5|Members___Regular-id8" channel="members" orderby="member_surname|member_firstname" alpha_ignore="the|a" numbers="after" group_numbers="yes" numbers_label="#" disable="categories|member_data|pagination" limit="1000"}

	       			"{member_firstname} {member_surname}",
		
			{/exp:low_alphabet:entries}
		];

		var val_to_replace = '&amp;';
		var replace_with = '&';

		$.each(availableTags, function (key, val) {
		    // search for value and replace it
		    availableTags[key] = val.replace(val_to_replace, replace_with);
		});

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
</div>
</div>

<div class="container" style="margin-left: 30px;">
	<div class="inside numbers"><br>
	<h2 class="active-comm" style="margin-top: -5px;"><span style="color:#141414; font-weight: 300; font-size: 13px; padding: 7px; padding-left: 21px; padding-right: 21px; color: white; opacity: 0.7; background-color: #141414; margin-left: -5px; margin-top: -30px;">Showing Search Results for "{exp:search:keywords}" — {exp:search:total_results} Entries Found</span></h2>
	<div class="row">



<!-- 100 Past Search Results -->
<div class="row">
	<div class="twelve columns centered">
{exp:search:search_results limit="1" paginate="bottom"}
{if '{channel}'=='100 Past'}
{if '{total_results}' > 1}
		<h4 class="search-header" style="text-align: center; color: #141414; margin-left: -15px">100 Past</h4><br>
	{/if}
{/if}
{/exp:search:search_results}

<ul class="search-results" style="margin-left: 25px; margin-top: -30px">
{exp:search:search_results}
{if '{channel}'=='100 Past'}
	 <li class="four column" style="min-height: 315px;">
        <a href="/past/project/{url_title}">{submission_images limit="1"}<img src="{image:250}" alt="{title}"/>{/submission_images}</a><br>
		<a href="/past/project/{url_title}">{title}</a>
    </li>

{/if}
{/exp:search:search_results}
</ul>
</div>
</div>
<br><br><br><br><br>
<!-- END 100 Past Search Results-->





<!-- 100 Future Search Results -->
<div class="row">
	<div class="twelve columns centered">
{exp:search:search_results limit="1" paginate="bottom"}
{if '{channel}'=='100 Future'}
{if '{total_results}' > 1}
		<h4 class="search-header" style="text-align: center; color: #141414; margin-left: -15px">100 Future</h4><br>
	{/if}
{/if}
{/exp:search:search_results}

<ul class="search-results" style="margin-left: 25px; margin-top: -30px">
{exp:search:search_results}
{if '{channel}'=='100 Future'}
	 <li class="four column" style="min-height: 315px;">
        <a href="/future/project/{url_title}">{submission_images limit="1"}<img src="{image:250}" alt="{title}"/>{/submission_images}</a><br>
		<a href="/future/project/{url_title}">{title}</a>
    </li>

{/if}
{/exp:search:search_results}
</ul>
</div>
</div>
<br><br><br><br><br>
<!-- END 100 Future Search Results -->




<!-- Workplaces Search Results -->
<div class="row">
	<div class="twelve columns centered">
{exp:search:search_results}
{if '{channel}'=='Practices'}
	{if '{total_results}' > 1}
		<h4 class="search-header" style="text-align: center; color: #141414; margin-left: -15px">Workplaces</h4>
	{/if}
 {/if}
{/exp:search:search_results}

<ul class="search-results" style="margin-left: 25px; margin-top: 30px">
{exp:search:search_results}
{if '{channel}'=='Practices'}
	<li class="four column" style="min-height: 80px; height: 80px;">
		<a href="/workplaces/profile/{url_title}" style="border-bottom: 0px; font-size: 15px;">{title}<br>
		<span style="font-weight: 300; opacity: 0.7; max-width: 250px; overflow: hidden; display: inline-block">{practice_website}</span></a>
	</li>
 {/if}
{/exp:search:search_results}
</ul>
</div>
</div>
<br><br><br><br><br>
<!-- END Workplaces Search Results-->




	<div class="row">
				<ul>
<!-- Members Search Results -->
{exp:search:search_results}
	{if '{channel}'=='Members'}

	{if '{total_results}' > 1}{if count=='1'}<br><h4 style="text-align: center; color: #141414">Members</h4><br><br>{/if}{/if}

		<li class="three column" style="margin-bottom: 40px; width:19%;">
			<a href="/people/profile/{url_title}">
			<div class="row">
				<div class="three columns">{___s-member-icon}</div>
				<div class="eight columns end">
					<h4 class="text-small hide-on-phones archive-designer-title" style="top:-9px;"><br>{title}</h4>
					<h4 class="text-small show-on-phones text-center">{title}</h4>
				</div>
			</div>
			</a>
	 	</li>
	 
	 {if count==total_results}<div class="clearfix"></div>{/if}

 {/if}
{/exp:search:search_results}
</ul>
	</div>

<!-- End Member Search Results -->







</div>
<div class="clearfix"></div>
<div class="row" style="color: #141414; letter-spacing: 0px; font-weight: 300; font-size: 16px; line-height: 1.445;  margin-top: 60px">
		<h2 class="active-comm" style="margin-left: -10px;">Search</h2><br>
		{exp:search:simple_form channel="archive_submissions|submissions|members|practices" result_page="search/index" no_result_page="search/noresults" status="not incomplete|pending|closed" form_id="homepage-search"}
        <p>
                <input type="text" name="keywords" id="keywords" value="" size="18" maxlength="100" placeholder="Search by title, designer, wordplace or type of project...">
                <input type="submit" class="submit" value=" " id="submit-search">
		{/exp:search:simple_form}
		<br><br><br><br><br>
</div>
</div>
</div>

<style>
ul.search-results > li:nth-child(4) {
	margin-left: 0% !important;
}

ul.search-results > li:nth-child(4n-1) {
	margin-left: 0% !important;
}

ul.search-results > li:nth-child(3) {
	margin-left: 4.4% !important;
}
</style>


</div>
{embed="___includes/2014footer"}
