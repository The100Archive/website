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
<p class="text-white text-medium">Thank you for your time and effort. Please finish by writing your thoughts below on the work that you have reviewed, and the selection that you have made. What does it say about design, about Ireland or about design in Ireland? Your words may be published in full or part as part of the archive presentation.</p>
</div>

{if logged_out}
<br />
<br />
<p class="text-small">
<a href="{path='signin'}" class="no_ul">You must be signed in to submit your comment. Click here to sign in now.</a>
<p>
{/if}
</div>





{exp:email:contact_form redirect="0" user_recipients="no" replyto="yes" return="http://100archive.com/account/archive-review-complete" form_class="form-horizontal nicer" recipients="onehundredarchive@gmail.com,david@conoranddavid.com" charset="utf-8"}
<div class="row">
<div class="eight columns centered">

<input type="hidden" id="from" name="from" value="{member_email}" />
<input type="hidden" id="subject" name="subject" value="100 Archive review comments" />
<textarea class="expand textarea" id="message" name="message" rows="18" placeholder="Your thoughts…"></textarea>
</div>

<div class="row pad-top pad-bottom text-grey text-center">
<input class="button large red text-black" name="submit" type='submit' value='Send Your Comment'>
</div>
</div>
{/exp:email:contact_form}






{embed="___includes/2014footer"}