{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }



<!--{___s-reviews-subnav}
<a href="{path="account/reviews"}">return to list of projects</a>
<h1>{title} - {___s-project-status-label}</h1>
-->




<div class="container fixed-bottom bg-dark-fade pad-top pad-bottom">
	<div class="row">
{if segment_4 == "voted"}
<div class="text-center text-regular link-green">
<br />
Thank you! Your vote has been recorded. {!-- Outputs link to next project, or message saying no more projects to review --}
{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
{embed="includes/submissions-judge-next-project" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" }
{/exp:channel:entries}
<br />
<br />
</div>
{if:else}
<div class="three columns offset-by-one text-regular">
Include this project in the 100 Future?
</div>
		<div class="three columns offset-by-one">
			{exp:safecracker channel="submissions" url_title="{segment_3}" return="account/review-project/{segment_3}/voted" class="" }
			{exp:channel:entries channel="submissions" limit="1" disable="member_data|pagination" show_expired="yes" require_entry="yes" status="open|closed|Pending|Showcase|Archive" }
                        {if "{submission_votes_no:total_rows}" >= 2}<input type="hidden" name="status" id="status" value="closed">{/if}
                        {/exp:channel:entries}
			<input type="hidden" name="field_id_38[row_order][]" value="row_new_0" />
			<input type="hidden" name="field_id_38[row_new_0][col_id_7][selections][]" value="{zoo_visitor_id}" />
			<input type="hidden" name="field_id_38[row_new_0][col_id_8]" value="{screen_name}"/>
			<button type="submit" class="xlarge white button hover-red">No</button>
			{/exp:safecracker}
		</div>
		<div class="three columns end">
			{exp:safecracker channel="submissions" url_title="{segment_3}" return="account/review-project/{segment_3}/voted" class="" }
			{exp:channel:entries channel="submissions" limit="1" disable="member_data|pagination" show_expired="yes" require_entry="yes" status="open|closed|Pending|Showcase|Archive" }
			{if "{submission_votes_yes:total_rows}" >= 2}<input type="hidden" name="status" id="status" value="Showcase">{/if}
			{/exp:channel:entries}
			<input type="hidden" name="field_id_37[row_order][]" value="row_new_0" />
			<input type="hidden" name="field_id_37[row_new_0][col_id_5][selections][]" value="{zoo_visitor_id}" />
			<input type="hidden" name="field_id_37[row_new_0][col_id_6]" value="{screen_name}"/>
			<button type="submit" class="xlarge white button hover-green">Yes</button>
			{/exp:safecracker}


		</div>
{/if}
	</div>
</div>

{exp:channel:entries channel="submissions" limit="1" disable="member_data|pagination" show_expired="yes" require_entry="yes" status="open|closed|Pending|Showcase|Archive" }

{!-- Checks if the judge has already voted on this project or not. If so, the embed will redirect them back to the account page--}
{embed="includes/submissions-judge-check" seg4="{segment_4}" id="{exp:playa:child_ids child_id="{zoo_visitor_id}" channel="members" field="submission_votes_yes|submission_votes_no"}" }

{___s-project-entry-review}

<!--
{if "{submission_images:total_rows}" >= 1}
{submission_images limit="1"}
{exp:imgsizer:size src="{image}" width="460"  alt="{title}"}
{/submission_images}
{if:else}
<img src="http://placehold.it/460x230" alt="{title}">
{/if}

{if "{submission_images:total_rows}" > 1}
{submission_images offset="1"}
{exp:imgsizer:size src="{image}" width="460" alt="{title}"}
{/submission_images}
{if:else}
<img src="http://placehold.it/460x230/333333/ffffff" alt="{title}">
{/if}




<h2>Overview</h2>
<dl>
<dt>Selected</dt><dd>{if status == "Archive"}Archive{if:else}Showcase{/if} {categories show_group="3" limit="1"}{category_name}{/categories}</dd>
<dt>Design Form</dt><dd>{categories show_group="2" backspace="2"}<a href="{path="___showcase"}">{category_name}</a>, {/categories}</dd>
<dt>Client Type</dt><dd >{categories show_group="1" backspace="2"}<a href="{path="___showcase"}">{category_name}</a>, {/categories}</dd>
{if "{submission_tags}" != ""}<dt>Descriptive Tags</dt><dd>{submission_tags}</dd>{/if}
{if "{submission_description}" != ""}<dt>Project Description</dt><dd>{submission_description}</dd>{/if}
</dl>
-->
{/exp:channel:entries}


{embed="___includes/2014footer"}
