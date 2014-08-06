{if segment_2=="past"}
<li class="block-{entry_date format="%g"}">
{if:elseif segment_2=="future"}
<li class="future-{switch="1|3|4|2|3|1|4|2"}" id="infinite">
{if:elseif segment_1=="show"}
<li class="future-{switch="1|3|4|2|3|1|4|2"}" id="infinite">
{if:elseif segment_1==""}
<li class="future-{switch="1|3|4|2|3|1|4|2"}" id="infinite">
{if:else}
<li>
{/if}

{if channel_short_name!="submissions"}

<a href="{title_permalink='past/project/'}">
<img src="{site_url}site/images/star_3.png" alt="Selected" class="awarded-status">
<img src="{submission_images limit="1"}{image:250}{/submission_images}">
<h2 class="text-small text-white">{title}</h2>

{if:else}

	{if status=="Showcase"}<a href="{title_permalink='future/project/'}">{/if}

	{if status=="Incomplete"}<a href="{path="account/add-project"}/{entry_id}">{/if}

	<img src="{submission_images limit="1"}{image:250}{/submission_images}">

	{if status=="Pending"}<span class="round orange label">Awaiting Review</span>{/if}

	{if status=="Incomplete"}<span class="round red label">Incomplete: Click to Edit</span>{/if}

	{if status=="closed"}<span class="round fade label">Unsuccessful</span>{/if}

	<h2 class="text-small text-white">{title}</h2>

	{if status=="Showcase||Incomplete"}</a>{/if}
	
{/if}

</li>
