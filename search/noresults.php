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
			<li><a href="#tabs-3" class="future-link">Future</a></li>
		</ul>
	</div>
</div>

<div class="container">
	<div class="inside numbers"><br>
	<h2 class="active-comm"><span style="color:#141414;">Results:</span> No Results</h2>
	<br><br>
		{exp:search:simple_form channel="archive_submissions|submissions|members|practices" result_page="search/index" no_result_page="search/noresults" status="not incomplete|pending|closed" form_id="homepage-search"}
        <p>
                <input type="text" name="keywords" id="keywords" value="" size="18" maxlength="100" placeholder="Search by title, designer, wordplace or type of project...">
                <input type="submit" value="submit" class="submit" id="submit-search">
		{/exp:search:simple_form}

</div>
</div>


</div>
{embed="___includes/2014footer"}

