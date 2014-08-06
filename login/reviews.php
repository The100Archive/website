{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>Review Submissions</h1>
</div>

<div class="row">
<div class="span10">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Development Note</h4>
<p>At the moment, votes can be submitted multiple times for each project. Voting <em>Yes</em> for a project updates it to Showcase. Voting <em>No</em> sets it to Unsuccessful. Setting an item to appear in the Archive can only be done via the admin area.</p>
</div>
</div>
</div>

<div class="row">

{s-reviews-subnav}

<div class="span10">
{embed="includes/review-listings" status="{if segment_5=="archive"}archive{if:elseif segment_5 == "unpublished"}closed{if:elseif segment_5 == "pending"}pending{if:else}open|closed|Pending|Showcase|Archive{/if}" }
</div>

</div>

{s-footer}