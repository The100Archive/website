{embed="___includes/header" title="Archive Review - Your Thoughts"}
{embed="___includes/2014menu"}

<div class="container pad-top bg-dark">
<div class="row pad-top">
<div class="three columns centered">
		<div class="row">
			<div class="five columns centered">
				<img src="/site/images/100DesignArchive-logo-smallsizes-white.png" alt="100 Design Archive small logo">
			</div>
		</div>
</div>
</div>
</div>

<div class="container pad-top bg-dark">
<div class="row pad-top pad-bottom text-grey text-center">

<div class="six columns centered">
<h1>{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }Thank You {member_firstname}!{/exp:channel:entries}</h1>
<br />
<br />
<p class="text-white text-medium">All done :)</p>
</div>

{if logged_out}
<br />
<br />
<p class="text-small">
<a href="{path='signin'}" class="no_ul">You must be signed in to submit your comment. Click here to sign in now.</a>
<p>
{/if}
</div>

</div><!-- Row -->
</div><!-- container -->



{embed="___includes/2014footer"}