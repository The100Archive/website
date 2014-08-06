{exp:channel:entries dynamic="no" entry_id="not {embed:current_id}" channel="submissions" limit="100" status="Showcase|Archive" author_id="{embed:author}" }
{if count == "1"}
<h2>Related Projects</h2>
<ul>
{/if}
<li><a href="{title_permalink="show/project"}">{title} - by {author}</a></li>
{if count == total_results}
</ul>
{/if}
{/exp:channel:entries}