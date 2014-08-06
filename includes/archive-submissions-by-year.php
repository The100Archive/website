{exp:channel:entries channel="submissions" dynamic="no" category="{embed:cat_id}" limit="100" status="archive" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}
{s-project-summary}
{s-pagination}

{if no_results}
<div class="span4"><strong>There are no entries in this section yet.</strong></div>
{/if}
{/exp:channel:entries}