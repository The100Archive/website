{embed="includes/header" }

<div class="page-header">
<h1>Showcase Search Results</h1>
</div>

{s-projects-search}

<div class="row">
{exp:low_search:results query="{segment_3}" limit="12" status="Showcase|Archive"}
{s-project-summary}
{if no_results}<div class="span2">No search results</div>{/if}
{s-pagination}
{/exp:low_search:results}
</div>

{s-footer}