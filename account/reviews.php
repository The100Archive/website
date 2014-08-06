{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }

<div class="container">
<div class="row">
<div class="nine columns offset-by-three end">
	<div class="row"><div class="six columns end">{___s-reviews-subnav}</div></div>
<div class="row">
{embed="___includes/review-listings" status="{if segment_5=="archive"}archive{if:elseif segment_5 == "unpublished"}closed{if:elseif segment_5 == "pending"}pending{if:else}open|closed|Pending|Showcase|Archive{/if}" }
</div>
</div>
</div>
</div>

{embed="___includes/2014footer"}
