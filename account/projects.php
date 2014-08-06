{___s-login-check}

{embed="___includes/header" title="Projects"}
{embed="___includes/2014menu" }

<div class="container">

<div class="row pad-bottom pad-top">
	<div class="six columns offset-by-three pad-bottom">
		<h1>Projects</h1>
	</div>
	<div class="three columns link-red text-black text-small">
		<p><a href="{if "{exp:tidy_credits member_id="{zoo_member_id}"}" > 0}{path="account/add-project"}{if:else}{path="account/subscriptions"}{/if}">Create a new project &rarr;</a><br />
		</p>
	</div>
	
</div><!-- Row -->


{exp:channel:entries dynamic="no" channel="submissions|archive_submissions" limit="100" status="open|closed|pending|incomplete|showcase|archive"  author_id="{zoo_member_id}" }

		{if no_results} 
		<div class="row text-black">
		<div class="eight columns centered">
		<p>There’s nothing here – yet! <br />
		
			{if "{exp:tidy_credits member_id="{zoo_member_id}"}" > 0}
			<a href="{path="account/add-project"}">Click here to create your first project.</a>
			{if:else}
			<a href="{path="account/subscriptions"}">Get credits or a subscription to create your first project.</a>
			{/if}
		</p>
		</div>
		</div><!-- Row -->
		{/if}
		{if count==1}
		<div class="row pad-top text-black">
		<div class="ten columns centered">
				<ul class="block-grid five-up">
                 {/if}
                 {2014_s-project-link}
                 {if count == total_results}
				</ul>
		</div>
		</div><!-- Row -->
                {/if}
				
{/exp:channel:entries}



</div>



{embed="___includes/2014footer"}