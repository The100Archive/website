{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }






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
			<a href="#" data-reveal-id="voteno" class="xlarge white button hover-red" data-dismissmodalclass="alt-close-reveal-modal">No</a>
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

<div id="voteno" class="reveal-modal bg-dark large">
<div class="container">
<div class="row">
	<h2 class="text-red">Before you vote No</h2>
	<p>Please be as generous as you can when reviewing submitted work. The aim of the 100 Future is to show a broad landscape of Irish design, from the ordinary to the exceptional.</p><p>If the work can be described as <i>any</i> of the following: <b>good, interesting, different, unexpected, simple, modest, clear, well executed, considered, culturally relevant, or noteworthy</b> it should be included.</p>
</div>
<div class="row pad-top">
	<div class="six columns">
		{exp:safecracker channel="submissions" url_title="{segment_3}" return="account/review-project/{segment_3}/voted" class="" }
		{exp:channel:entries channel="submissions" limit="1" disable="member_data|pagination" show_expired="yes" require_entry="yes" status="open|closed|Pending|Showcase|Archive" }
	                {if "{submission_votes_no:total_rows}" >= 2}<input type="hidden" name="status" id="status" value="closed">{/if}
	                {/exp:channel:entries}
		<input type="hidden" name="field_id_38[row_order][]" value="row_new_0" />
		<input type="hidden" name="field_id_38[row_new_0][col_id_7][selections][]" value="{zoo_visitor_id}" />
		<input type="hidden" name="field_id_38[row_new_0][col_id_8]" value="{screen_name}"/>
		<button type="submit" class="large white button hover-red">It&rsquo;s still No</button>
		{/exp:safecracker}
	</div>
	<div class="six columns">
	<a href="" class="alt-close-reveal-modal xlarge white button hover-green">I&rsquo;ll Reconsider</a>
	</div>
	</div>
	<div class="row pad-top">
		<p class="text-small">If there is a technical issue that means you can&rsquo;t evaluate the submission, please vote no to skip it, and then get in touch.</p>
	</div>
	<a class="close-reveal-modal no_ul">&#215;</a>
</div>
</div>


{exp:channel:entries channel="submissions" limit="1" disable="member_data|pagination" show_expired="yes" require_entry="yes" status="open|closed|Pending|Showcase|Archive" }

{!-- Checks if the judge has already voted on this project or not. If so, the embed will redirect them back to the account page--}
{embed="includes/submissions-judge-check" seg4="{segment_4}" id="{exp:playa:child_ids child_id="{zoo_visitor_id}" channel="members" field="submission_votes_yes|submission_votes_no"}" }

{___s-project-entry-review}
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />


{/exp:channel:entries}


{embed="___includes/2014footer"}
