{embed="includes/header" }

<div class="page-header">
<h1>Member Search Results</h1>
</div>

{s-member-search}

<div class="row">
<div class="span12">
<ol class="unstyled">
{exp:low_search:results query="{segment_3}" limit="100" status="not closed"}
  <li><a href="{title_permalink="members/profile/"}">{title}</a></li>
{if no_results}No search results{/if}
{/exp:low_search:results}
</ol>
</div>
</div>


{s-footer}