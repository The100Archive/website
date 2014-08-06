{embed="includes/header" }

<div class="page-header">
<h1>Long list{if segment_3_category_name != ""}: {segment_3_category_name}{/if}</h1>
<p>These projects will be considered at the end of the year for a place in the archive.</p>
</div>

{s-projects-search}

<div class="row">
{exp:channel:entries channel="submissions" limit="12" status="Showcase|Archive" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}
{s-project-summary}
{s-pagination}
{/exp:channel:entries}
</div>

{s-footer}