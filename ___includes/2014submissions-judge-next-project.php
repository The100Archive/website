{exp:channel:entries dynamic="no" entry_id="not {embed:ids} channel="submissions" status="Pending"}
{if count == 1}
{if embed:start != ""}
  <a href="{title_permalink="account/review-project"}">Start now &rarr;</a>
 {if:else}
  <a href="{title_permalink="account/review-project"}">Next project &rarr;</a>
 {/if}
{/if}
{if total_results == 0}You have no more projects to review{/if}
{/exp:channel:entries}
