{exp:channel:entries channel="submissions" dynamic="no" category="{embed:cat_id}" limit="100" status="archive" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}
{___s-project-summary}
{___s-pagination}

{if no_results}
<p>There are no entries in this section yet.</p>
{/if}
{/exp:channel:entries}