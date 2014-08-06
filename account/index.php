{___s-login-check}

{embed="___includes/header" title="Your Account"}
{embed="___includes/2014menu" }

<div class="container">

<div class="row">
			<div class="nine columns offset-by-two end">
			{if last_segment == "confirmation"}
			<div class="alert-box orange">Great! Your profile has been updated.<a href="" class="close">&times;</a></div>
			{/if}
			{if last_segment == "workplace-confirmation"}
			<div class="alert-box orange">Thanks! The workplace has been updated.<a href="" class="close">&times;</a></div>
			{/if}
			{if last_segment == "project-submitted"}
			<div class="alert-box green">
			Thank you! Your project has been submitted.<br />How was the process for you? <a id="Intercom" href="mailto:e83e95fedd931d2be0740104d3bb598a58f0db27@incoming.intercom.io">Take a moment to tell us how you got on</a>.<br />You can read more about the review process <a href="{path="learn/kb/review-process"}">here</a>.<a href="" class="close">&times;</a></div>
			{/if}
			</div>
</div><!-- Row -->

<!--—————— Text ——————-->
	<div class="row pad-top">
			<div class="three columns">
				<div class="row">
					<div class="six columns offset-by-three">
					{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
							{___s-member-icon}
					</div>
				</div>			
			</div>

	
				<div class="five columns pad-bottom">
				<p class="link-orange">Hi {member_firstname}, welcome to your account page.
{if member_group == "5"}
You&rsquo;re registered as a Founder{/if}{if member_group == "7"}
You&rsquo;re registered as a member of the Professional Panel{/if}{if member_group == "9"}
You&rsquo;re listed as a member of the Archive Panel{/if}{if member_practice !=""}{member_practice limit="1"}{if {count} != 0}{if member_group == "5" OR member_group == "7" OR member_group == "9"}, currently working at{if:else}You&rsquo;re currently working at{/if}
{/if}
{/member_practice}
{if:else}{if member_group == "5" OR member_group == "7" OR member_group == "9"}.{/if}
{/if}
					
					{member_practice backspace="9"}
					<a href="{title_permalink="workplaces/profile"}">{title}</a>, 
					{/member_practice}
					{if member_practice !=""}<span>. </span>{/if}
					
					{member_previous_practices limit="1"}
					{if {count} != 0}
					<span>Your previous workplaces include</span>
					{/if}
					{/member_previous_practices}
					{member_previous_practices backspace="9"}
					<a href="{title_permalink="workplaces/profile"}">{title}</a>, 
					{/member_previous_practices}
					{if member_previous_practices !=""}<span>. </span>{/if}
					
					{if member_practice =="" && member_previous_practices ==""}To make the archive into a more valuable resource, we&rsquo;d like you to <a href="{path="account/profile"}">add a little more information about yourself</a>.
					
					{if:elseif member_practice ==""}To make the archive into a more valuable resource, we&rsquo;d like you to <a href="{path="account/profile"}">add a little more information about where you work at present</a>.
					{if:elseif member_previous_practices ==""}To make the archive into a more valuable resource, we&rsquo;d like you to <a href="{path="account/profile"}">add a little more information about where you have worked as a designer</a>.
					{if:else}
					{/if}
				{/exp:channel:entries}
				{if "{exp:tidy_credits:subscription member_id="{zoo_member_id}"}" > 0}You have an annual subscription, which expires in {exp:tidy_credits:subscription member_id="{zoo_member_id}"}&nbsp;days.
				{if:elseif "{exp:tidy_credits:credits_available member_id="{zoo_member_id}"}" > 0}You have {exp:tidy_credits:credits_available member_id="{zoo_member_id}"} credit(s) left on your account.{/if}
				</p>
				
				
				{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
					{exp:playa:parents channel="practices" author_id="{zoo_member_id}"}
				<p class="link-orange">You created the page for <a href="{title_permalink="workplaces/profile"}">{title}</a> and you can edit it <a href="{title_permalink="account/workplace"}">here</a>.</p>			
				{/exp:playa:parents}{/exp:channel:entries}

			<div class="row pad-top pad-bottom">
				<div class="ten columns end">
				<br />				
				<a class="button xlarge black hover-orange" href="{path="account/profile"}">Update your Profile</a><br />
				<p class="text-center pad-top">or</p>
				<a class="button xlarge black hover-green" href="{if "{exp:tidy_credits member_id="{zoo_member_id}"}" > 0}{path="account/add-project"}{if:else}{path="account/subscriptions"}{/if}">Submit a Project</a><br />
				</div>
			</div>
			
			</div><!--Five Columns-->		
		
					
					
					
{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
		<div class="two columns offset-by-one end link-orange text-black text-small">
			<p><a href="{title_permalink="people/profile"}">Click here</a> to see your profile as it is viewed by others.</p>
		</div>
	</div><!-- Row -->
{/exp:channel:entries}

{if member_group == "7" OR member_group == "1"}
<div class="row pad-top pad-bottom text-black">
	<div class="three columns">
		<div class="row">
			<div class="eight columns offset-by-four">
				<p class="text-small">100 Future selection</p>
			</div>
		</div>			
	</div>
	<div class="five columns link-green">
        {exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
        <p>There are currently {embed="includes/submissions-judge-count" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" } projects which require your attention. 
        {embed="includes/submissions-judge-next-project" start="Yes" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" }</p>
        {/exp:channel:entries}
        {if member_group == "1"}<p>See the submission list <a href="{path="account/reviews"}">here &rarr;</a></p>{/if}
        
	</div>
	<div class="two columns offset-by-one end text-small link-red">        <p>For a note on the review process, <a href="{path="learn/kb/review-process"}">check the knowledge base.</a></p>
	</div>
</div><!-- Row -->
{/if}
{if member_group == "9"}
<div class="row pad-top pad-bottom text-black">
	<div class="three columns">
		<div class="row">
			<div class="eight columns offset-by-four">
				<p class="text-small">100 Past selection</p>
			</div>
		</div>			
	</div>
	<div class="five columns link-green end">
        <p>The work is ready for review.<br /><a href="{path="account/archive-review"}">Click here to begin.</a></p>
	</div>
</div><!-- Row -->
{/if}

{exp:channel:entries dynamic="no" channel="submissions" limit="100" status="open|closed|pending|incomplete|showcase|archive"  author_id="{zoo_member_id}" }

		{if count==1}
		<div class="row pad-top text-black">
			<div class="three columns">
				<div class="row">
					<div class="eight columns offset-by-four">
						<p class="text-small">{total_results} Submitted Projects</p>
					</div>
				</div>			
			</div>
			<div class="eight columns end link-black">
				<ul class="block-grid five-up">
                 {/if}
                 {___s-project-summary}
                 {if count == total_results}
				</ul>
			</div>
		</div><!-- Row -->
                {/if}
				
{/exp:channel:entries}



</div>
<br><br><br>


{embed="___includes/2014footer"}